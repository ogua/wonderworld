<?php
$pageTitle = 'Terms of Use';
$pageDescription = 'The terms governing use of the Wonder World International School website.';
$canonicalPath = '/terms-of-use.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Terms of Use';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Policies', 'url' => null],
    ['label' => 'Terms of Use', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container prose" style="max-width: 780px;">

      <p><em>Last updated: <?= date('F Y') ?></em></p>

      <p>These terms govern your use of the Wonder World International School ("WWIS") website.
        By using this site, you agree to these terms.</p>

      <h2>Purpose of This Site</h2>
      <p>This website provides information about WWIS (our programs, admissions process,
        campus, and community) and allows visitors to contact us or sign up for updates. It is
        not an admissions portal in itself; submitting an inquiry through this site does not
        guarantee admission, which follows the process described on our
        <a href="admission-requirements.php">Admission Requirements page</a>.</p>

      <h2>Accuracy of Information</h2>
      <p>We aim to keep the content on this site accurate and current, including fees, programs,
        and school hours. However, details are subject to change, and the school's official
        communications (letters, contracts, invoices) take precedence over anything published
        here in case of any discrepancy.</p>

      <h2>Content Ownership</h2>
      <p>The text, photos, and design of this website belong to Wonder World International
        School, except where otherwise noted. Photos and videos featuring students and staff are
        used with appropriate permission. Please don't reproduce or redistribute site content
        without asking us first.</p>

      <h2>Acceptable Use</h2>
      <p>Please don't use this site's forms to send spam, unlawful content, or anything intended
        to disrupt or harm the site or its visitors.</p>

      <h2>Third-Party Links</h2>
      <p>This site links to external services we don't control, including WhatsApp, Instagram,
        and Google Maps. Your use of those services is governed by their own terms and privacy
        policies, not ours.</p>

      <h2>Limitation of Liability</h2>
      <p>This website is provided "as is." While we take reasonable care to keep it accurate and
        available, WWIS is not liable for any loss arising from reliance on information found
        here, or from temporary unavailability of the site.</p>

      <h2>Changes to These Terms</h2>
      <p>We may update these terms from time to time. The "last updated" date above reflects the
        most recent revision.</p>

      <h2>Contact Us</h2>
      <p>Questions about these terms can be sent to
        <a href="mailto:wonderworldintsch@gmail.com">wonderworldintsch@gmail.com</a> or via our
        <a href="contact.php">Contact page</a>.</p>

    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
