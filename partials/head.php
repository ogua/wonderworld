<?php
/**
 * Shared <head>. Expects these vars set by the including page BEFORE this
 * file is required: $pageTitle, $pageDescription, $canonicalPath.
 * Optional: $pageStylesheet (extra page-specific CSS href), $isHome (bool).
 */
require_once __DIR__ . '/icons.php';
$siteName = 'Wonder World International School';
$siteUrl = 'https://wonderworldinternationalschool.com';
$isHome = $isHome ?? false;
$fullTitle = $pageTitle . ' | ' . $siteName;
$canonical = $siteUrl . $canonicalPath;
$ogImage = $siteUrl . '/asset/images/logo-mark.png';

if ($isHome) {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'EducationalOrganization',
        'name' => $siteName,
        'alternateName' => 'WWIS',
        'url' => $siteUrl,
        'logo' => $siteUrl . '/asset/images/logo-mark.png',
        'foundingDate' => '2017-07',
        'email' => 'wonderworldintsch@gmail.com',
        'telephone' => '+233558230501',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Father Odai Kwabina Street, Adjiriganor',
            'addressLocality' => 'East Legon, Accra',
            'postalCode' => 'GD-210-9384',
            'addressCountry' => 'GH',
        ],
        'sameAs' => ['https://www.instagram.com/wonderworldschoolgh/'],
    ];
} else {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => $fullTitle,
        'description' => $pageDescription,
        'url' => $canonical,
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($fullTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

<meta property="og:title" content="<?= htmlspecialchars($fullTitle) ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
<meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($fullTitle) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

<link rel="icon" href="asset/favicon.ico">
<link rel="apple-touch-icon" href="asset/favicon.ico">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600;700&family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/tokens.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/components.css">
<?php if (!empty($pageStylesheet)): ?>
<link rel="stylesheet" href="<?= htmlspecialchars($pageStylesheet) ?>">
<?php endif; ?>

<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES) ?></script>
</head>
<body>
<a href="#main-content" class="skip-link">Skip to main content</a>
