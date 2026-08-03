<?php
$pageTitle = 'Privacy Policy';
$pageDescription = 'How Wonder World International School collects, uses, and protects information submitted through this website.';
$canonicalPath = '/privacy-policy.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Privacy Policy';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Policies', 'url' => null],
    ['label' => 'Privacy Policy', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container prose" style="max-width: 780px;">

      <p><em>Last updated: <?= date('F Y') ?></em></p>

      <p>Wonder World International School ("WWIS," "we," "us") respects your privacy. This
        policy explains what information this website collects, how it is used, and how it is
        protected.</p>

      <h2>What We Collect</h2>
      <p>We only collect information you choose to give us directly through this website:</p>
      <ul>
        <li><strong>Contact form:</strong> your name, email address, subject, and message.</li>
        <li><strong>Newsletter signup:</strong> your email address.</li>
      </ul>
      <p>We do not use tracking cookies, advertising pixels, or third-party analytics on this
        site. The one exception is the Google Maps embed on our homepage and Contact page, which
        may set cookies controlled by Google when it loads. This is governed by
        <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's own
        privacy policy</a>, not ours.</p>

      <h2>How We Use It</h2>
      <p>Information submitted through our forms is used only to respond to your inquiry, process
        an admission or contact request, or send the school updates you've signed up to receive.
        We do not sell, rent, or share your information with third parties for marketing purposes.
        We may disclose information if required to do so by law.</p>

      <h2>How We Store It</h2>
      <p>Form submissions are delivered to the school's official inbox
        (<a href="mailto:wonderworldintsch@gmail.com">wonderworldintsch@gmail.com</a>) and kept
        only as long as needed to respond to and process your request.</p>

      <h2>Children's Information</h2>
      <p>Some forms on this site (such as admission inquiries) ask for information about a child,
        submitted by a parent or guardian. This information is used solely for admissions purposes
        and is treated with the same care as all personal data described in this policy.</p>

      <h2>Your Rights</h2>
      <p>You may ask us what information we hold about you, request a correction, or ask us to
        delete it, by contacting us at
        <a href="mailto:wonderworldintsch@gmail.com">wonderworldintsch@gmail.com</a>.</p>

      <h2>Changes to This Policy</h2>
      <p>We may update this policy from time to time. The "last updated" date at the top of this
        page will reflect the most recent revision.</p>

      <h2>Contact Us</h2>
      <p>Questions about this policy can be sent to
        <a href="mailto:wonderworldintsch@gmail.com">wonderworldintsch@gmail.com</a> or via our
        <a href="contact.php">Contact page</a>.</p>

    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
