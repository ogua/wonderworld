<?php
$pageTitle = 'Facilities';
$pageDescription = 'Our campus at Wonder World International School: a purpose-built building in East Legon with covered outdoor play space, plus a growing Primary Department campus.';
$canonicalPath = '/facilities.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Facilities';
$pageHeroBg = 'asset/images/facilities-building-2.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'School Life', 'url' => 'school-life.php'],
    ['label' => 'Facilities', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container split-panel">
      <div class="split-panel__media">
        <img src="asset/images/hero-campus-building.jpg" alt="The Wonder World International School campus building in East Legon" loading="lazy">
      </div>
      <div>
        <p class="eyebrow">Our Campus</p>
        <h2>A Purpose-Built Home in East Legon</h2>
        <p>Our campus in Adjiriganor, East Legon, houses our classrooms, offices, and a covered
          outdoor play and activity area shaded from Accra's sun, visible in the blue canopy that
          shelters our youngest learners at play. The compound is walled and gated, with our
          branding and signage marking the entrance.</p>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container split-panel split-panel--reverse">
      <div class="split-panel__media">
        <img src="asset/images/hero-primary-campus.jpg" alt="Our Primary and Early Years Department building" loading="lazy">
      </div>
      <div>
        <p class="eyebrow">Growing With Our Students</p>
        <h2>A Dedicated Primary Department Building</h2>
        <p>As our Primary Department (KG–Grade 3) and Early Years Department (Nursery–Pre-KG) have
          grown, so has our footprint, with a dedicated building supporting admissions and classes
          for these age groups.</p>
        <a href="admissions.php" class="btn btn--primary">See Admissions</a>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Beyond the Classroom</p>
        <h2>Extra-Curricular &amp; Enrichment</h2>
      </div>
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('waves') ?></div>
          <h3>Swimming</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('racket') ?></div>
          <h3>Tennis</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('ribbon') ?></div>
          <h3>Ballet</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('flame') ?></div>
          <h3>Karate</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('abacus') ?></div>
          <h3>Abacus with BraiNest</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('books-stack') ?></div>
          <h3>Super Readers Club</h3>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Come See It for Yourself</h2>
        <p>Visit during our Open House, held the week before every new term.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Plan a Visit</a>
          <a href="gallery.php" class="btn btn--outline">View the Gallery</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
