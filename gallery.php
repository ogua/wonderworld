<?php
$pageTitle = 'Gallery';
$pageDescription = 'Real photos from life at Wonder World International School: our campus, excursions, celebrations, and sports and extra-curricular activities.';
$canonicalPath = '/gallery.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Gallery';
$pageHeroBg = 'asset/images/hero-human-chain.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'School Life', 'url' => 'school-life.php'],
    ['label' => 'Gallery', 'url' => null],
];
require 'partials/page-hero.php';

$photos = [
    ['src' => 'hero-campus-building.jpg', 'w' => 1920, 'h' => 1508, 'alt' => 'Our East Legon campus building with students gathered on the grounds', 'cat' => 'campus'],
    ['src' => 'hero-primary-campus.jpg', 'w' => 1920, 'h' => 1280, 'alt' => 'Our growing Primary Department building', 'cat' => 'campus'],
    ['src' => 'why-choose-building.jpg', 'w' => 1200, 'h' => 675, 'alt' => 'Aerial view of the WWIS campus building', 'cat' => 'campus'],
    ['src' => 'facilities-building-2.jpg', 'w' => 1200, 'h' => 675, 'alt' => 'The WWIS campus building from another angle', 'cat' => 'campus'],
    ['src' => 'hero-human-chain.jpg', 'w' => 1739, 'h' => 2250, 'alt' => 'Students forming a hand-in-hand chain across the courtyard', 'cat' => 'community'],
    ['src' => 'gallery-human-chain-3.jpg', 'w' => 1200, 'h' => 1552, 'alt' => 'Another view of the student human chain', 'cat' => 'community'],
    ['src' => 'gallery-human-chain-4.jpg', 'w' => 1200, 'h' => 1552, 'alt' => 'The student human chain, seen from a different angle', 'cat' => 'community'],
    ['src' => 'hero-excursion.jpg', 'w' => 1920, 'h' => 1280, 'alt' => 'Students on an excursion to a plant nursery', 'cat' => 'excursions'],
    ['src' => 'hero-playcentre.jpg', 'w' => 1920, 'h' => 1279, 'alt' => 'A field trip to an indoor adventure and play centre', 'cat' => 'excursions'],
    ['src' => 'hero-graduation.jpg', 'w' => 1920, 'h' => 1279, 'alt' => 'A family celebrating graduation day at WWIS', 'cat' => 'celebrations'],
    ['src' => 'gallery-graduation-2.jpg', 'w' => 1200, 'h' => 799, 'alt' => 'A student receiving their diploma at a graduation ceremony', 'cat' => 'celebrations'],
    ['src' => 'gallery-fathers-day.jpg', 'w' => 1200, 'h' => 1600, 'alt' => "A Father's Day celebration at WWIS", 'cat' => 'celebrations'],
    ['src' => 'gallery-christmas-1.jpg', 'w' => 1200, 'h' => 800, 'alt' => 'A festive Christmas celebration at school', 'cat' => 'celebrations'],
    ['src' => 'gallery-christmas-2.jpg', 'w' => 1200, 'h' => 800, 'alt' => 'Families at the WWIS Christmas celebration', 'cat' => 'celebrations'],
    ['src' => 'gallery-karate-grading.jpg', 'w' => 1200, 'h' => 799, 'alt' => 'A student receiving their belt at a karate grading ceremony', 'cat' => 'sports'],
    ['src' => 'gallery-sports-day.jpg', 'w' => 1200, 'h' => 1600, 'alt' => 'Students on the podium at a school sports day', 'cat' => 'sports'],
    ['src' => 'gallery-craft-activity.jpg', 'w' => 1000, 'h' => 666, 'alt' => 'A creative snack-food craft activity', 'cat' => 'sports'],
];

$filters = [
    'all' => 'All',
    'campus' => 'Campus',
    'community' => 'Community Spirit',
    'excursions' => 'Excursions',
    'celebrations' => 'Celebrations',
    'sports' => 'Sports & Activities',
];
?>

<main id="main-content">

  <section class="content-band">
    <div class="container">
      <div class="gallery-filters" role="group" aria-label="Filter gallery by category">
        <?php foreach ($filters as $key => $label): ?>
          <button type="button" class="gallery-filters__btn<?= $key === 'all' ? ' is-active' : '' ?>" data-filter="<?= $key ?>" aria-pressed="<?= $key === 'all' ? 'true' : 'false' ?>"><?= htmlspecialchars($label) ?></button>
        <?php endforeach; ?>
      </div>

      <div class="gallery-masonry">
        <?php foreach ($photos as $photo): ?>
          <button type="button" class="gallery-item" data-category="<?= $photo['cat'] ?>" aria-label="View larger: <?= htmlspecialchars($photo['alt']) ?>">
            <img src="asset/images/<?= $photo['src'] ?>" width="<?= $photo['w'] ?>" height="<?= $photo['h'] ?>" alt="<?= htmlspecialchars($photo['alt']) ?>" loading="lazy">
            <span class="gallery-item__caption"><?= htmlspecialchars($photo['alt']) ?></span>
          </button>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Want to See More?</h2>
        <p>Follow us on Instagram for real-time photos and updates from school life.</p>
        <div class="cta-panel__ctas">
          <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener" class="btn btn--primary">@wonderworldschoolgh</a>
          <a href="events.php" class="btn btn--outline">See Our Events</a>
        </div>
      </div>
    </div>
  </section>

</main>

<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer">
  <button type="button" class="lightbox__close" id="lightbox-close" aria-label="Close">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
  <button type="button" class="lightbox__nav lightbox__nav--prev" id="lightbox-prev" aria-label="Previous image">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
  </button>
  <img id="lightbox-img" src="" alt="">
  <button type="button" class="lightbox__nav lightbox__nav--next" id="lightbox-next" aria-label="Next image">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
  </button>
  <p class="lightbox__caption" id="lightbox-caption"></p>
</div>

<?php require 'partials/footer.php'; ?>
