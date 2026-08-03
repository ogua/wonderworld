<?php
/**
 * Shared form-submission handler. Every form on the site posts here with a
 * `form_type` field (e.g. "newsletter"); all of them ultimately reach
 * wonderworldintsch@gmail.com per CLAUDE.md.
 *
 * On localhost, submissions are logged to a temp file instead of actually
 * emailed, so testing this locally never spams the real school inbox. The
 * log deliberately lives outside the web root (sys_get_temp_dir()), not
 * under workfiles/, so it can never be served over HTTP by accident.
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

// Honeypot: real visitors never fill this hidden field, bots often do.
// Pretend success so bots learn nothing from the response.
if (!empty($_POST['website'])) {
    echo json_encode(['ok' => true]);
    exit;
}

$formType = $_POST['form_type'] ?? 'newsletter';
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);

if (!$email) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Please enter a valid email address.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$subjectField = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$body = "Form: {$formType}\nEmail: {$email}\n";
if ($name !== '') {
    $body .= "Name: {$name}\n";
}
if ($phone !== '') {
    $body .= "Phone: {$phone}\n";
}
if ($subjectField !== '') {
    $body .= "Subject: {$subjectField}\n";
}
if ($message !== '') {
    $body .= "Message:\n{$message}\n";
}
$body .= 'Submitted: ' . date('Y-m-d H:i:s') . "\n";

$subjectToType = [
    'General Enquiries' => 'general',
    'Admissions Enquiries' => 'admissions',
    'Request an Admission Form' => 'form_request',
    'Book a School Tour' => 'tour_consult',
    'Schedule an Admissions Consultation' => 'consultation',
];
$enquiryType = $subjectToType[$subjectField] ?? 'other';

/**
 * Persist to the admin portal's database so Front Desk staff see the
 * submission there too, not just as an email. This is best-effort: a DB
 * failure here must never block the email send below, which remains the
 * fallback of record.
 */
require_once __DIR__ . '/../db/db.php';

if (!$conn->connect_error) {
    if ($formType === 'newsletter') {
        $stmt = $conn->prepare(
            'INSERT INTO newsletter_subscribers (uniqueid, email, name, status, source, created_at, updated_at)
             VALUES (?, ?, ?, "subscribed", "website", NOW(), NOW())
             ON DUPLICATE KEY UPDATE status = "subscribed", updated_at = NOW()'
        );
        if ($stmt) {
            $stmt->bind_param('sss', $uniqueid, $email, $name);
            $stmt->execute();
            $stmt->close();
        }
    } else {
        $stmt = $conn->prepare(
            'INSERT INTO website_enquiries (uniqueid, type, name, email, phone, message, status, created_at, updated_at)
             VALUES (?, ?, ?, ?, ?, ?, "new", NOW(), NOW())'
        );
        if ($stmt) {
            $stmt->bind_param('ssssss', $uniqueid, $enquiryType, $name, $email, $phone, $message);
            $stmt->execute();
            $stmt->close();
        }
    }
}

// Allowlist the real production domain for actually sending mail; every other
// host (localhost, 127.0.0.1, the oguasms.com:7000 dev vhost, etc.) is treated
// as dev/test and only logs, so testing never spams the real school inbox.
$productionHost = 'wonderworldinternationalschool.com';
$isLocal = ($_SERVER['SERVER_NAME'] ?? '') !== $productionHost;

// "Request an Admission Form": hand the parent the online application link
// right away by including it in their auto-reply, instead of only waiting on
// a staff member to reply manually. Points at the "pay first" flow: after
// payment the parent gets a link to finish the form (or a blank PDF to fill
// by hand) by SMS and email.
$applyLink = $enquiryType === 'form_request'
    ? rtrim($schoolurl, '/') . '/apply/' . rawurlencode($uniqueid) . '/pay'
    : null;

if ($isLocal) {
    $logFile = sys_get_temp_dir() . '/wwis-mail-log.txt';
    $logBody = $body . ($applyLink ? "Auto-reply would include apply link: {$applyLink}\n" : '');
    file_put_contents($logFile, str_repeat('-', 40) . "\n" . $logBody, FILE_APPEND);
    echo json_encode(['ok' => true, 'dev' => true]);
    exit;
}

$to = 'wonderworldintsch@gmail.com';
$subjectLine = $subjectField !== '' ? $subjectField : ($formType === 'newsletter' ? 'Newsletter signup' : 'New form submission');
$subject = "WWIS website: {$subjectLine}";
$headers = "From: no-reply@wonderworldinternationalschool.com\r\nReply-To: {$email}\r\n";

$sent = mail($to, $subject, $body, $headers);

if ($applyLink && $name !== '') {
    $replyBody = "Hi {$name},\n\nThank you for your interest in Wonder World International School. "
        . "You can complete our online admission application and pay the admission fee here:\n\n{$applyLink}\n\n"
        . "If you have any questions in the meantime, just reply to this email.\n\n"
        . "Wonder World International School";
    $replyHeaders = "From: no-reply@wonderworldinternationalschool.com\r\n";
    @mail($email, 'Your Online Admission Application - Wonder World International School', $replyBody, $replyHeaders);
}

echo json_encode(['ok' => (bool) $sent]);
