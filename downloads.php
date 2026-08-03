<?php
$pageTitle = 'Downloads';
$pageDescription = 'Downloadable forms and documents from Wonder World International School.';
$canonicalPath = '/downloads.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Downloads';
$pageHeroBg = 'asset/images/facilities-building-2.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Parent Information', 'url' => 'parent-information.php'],
    ['label' => 'Downloads', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 720px;">
      <div class="empty-state" data-reveal>
        <div class="empty-state__icon" aria-hidden="true"><?= icon('document') ?></div>
        <p>Downloadable forms and our school prospectus will be available here soon. For an
          admission form or any other document right now, contact us directly and we'll send it
          straight to you.</p>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Need a Document Now?</h2>
        <p>Request it directly and we'll get it to you.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
