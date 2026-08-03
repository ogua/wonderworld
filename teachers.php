<?php
$pageTitle = 'Teachers';
$pageDescription = 'Meet the teaching staff of Wonder World International School.';
$canonicalPath = '/teachers.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Our Teachers';
$pageHeroBg = 'asset/images/why-choose-building.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Leadership', 'url' => 'management-team.php'],
    ['label' => 'Teachers', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 720px;">
      <div class="empty-state" data-reveal>
        <div class="empty-state__icon" aria-hidden="true"><?= icon('apple') ?></div>
        <p>Individual teacher profiles are coming soon. In the meantime, see our teaching staff in
          action across school life in our <a href="gallery.php">Gallery</a>, or read about the
          educators who've shaped our journey on our <a href="history.php">History page</a>.</p>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Interested in Joining Our Team?</h2>
        <p>Reach out to learn about current opportunities at WWIS.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
