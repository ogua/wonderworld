<?php
$pageTitle = 'Academics';
$pageDescription = 'Academics at Wonder World International School: our subjects, the skills we build in every learner, our three-term academic year, and daily school hours.';
$canonicalPath = '/academics.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Academics';
$pageHeroBg = 'asset/images/hero-primary-campus.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Academics', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Overview</p>
      <h2>Learning Built Around the Whole Child</h2>
      <p>Our facility caters to early years starters (from 3 months of age) up to preschoolers, and
        primary school from kindergarten upward, currently through Grade 2, with room built in for
        expansion as our classes grow. The academic year starts each January, though admissions are
        ongoing throughout the year. We teach on the <a href="hybrid-curriculum.php">WWIS
        Values-Based Hybrid Curriculum</a>, anchored in Ghana Education Service's New
        Standard-Based Curriculum (SBC) and enriched with British, American, Montessori and Oxford
        International Curriculum (OIC) influences.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Skills We Build</p>
        <h2>Lifelong Learners, Ready for the World</h2>
      </div>
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('compass') ?></div>
          <h3>Personal Development &amp; Leadership</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('lightbulb') ?></div>
          <h3>Critical Thinking &amp; Problem Solving</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('palette') ?></div>
          <h3>Creativity &amp; Innovation</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('link') ?></div>
          <h3>Community &amp; Collaboration</h3>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('globe') ?></div>
          <h3>Cultural Identity &amp; Global Citizenship</h3>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container split-panel">
      <div>
        <p class="eyebrow">Subjects</p>
        <h2>What Students Study</h2>
        <ul class="checklist">
          <li>English</li>
          <li>Mathematics</li>
          <li>Science</li>
          <li>History</li>
          <li>Creative Arts</li>
          <li>Our World, Our People</li>
          <li>Physical Education</li>
          <li>Computing / ICT</li>
        </ul>
      </div>
      <div>
        <p class="eyebrow">Academic Year</p>
        <h2>Three Terms a Year</h2>
        <ul class="checklist">
          <li>First Term: January to April</li>
          <li>Second Term: May to August</li>
          <li>Third Term: September to December</li>
        </ul>
        <p>Vacation breaks run 2–3 weeks between terms. New students sit a placement assessment
          and, where applicable, a milestone screening with our speech and behavioural
          therapist.</p>
      </div>
    </div>
  </section>

  <section class="content-band content-band--dark">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Daily Schedule</p>
        <h2>School Hours</h2>
      </div>
      <div class="stat-grid" data-reveal>
        <div class="arc-stat">
          <span class="arc-stat__value" style="font-size: 1.5rem;">8:00–2:00</span>
          <span class="arc-stat__label">School Hours</span>
        </div>
        <div class="arc-stat">
          <span class="arc-stat__value" style="font-size: 1.5rem;">2:00–3:00</span>
          <span class="arc-stat__label">Extra-Curricular</span>
        </div>
        <div class="arc-stat">
          <span class="arc-stat__value" style="font-size: 1.5rem;">3:00–5:00</span>
          <span class="arc-stat__label">Pick-Up Time</span>
        </div>
        <div class="arc-stat">
          <span class="arc-stat__value" style="font-size: 1.5rem;">3:00–7:00</span>
          <span class="arc-stat__label">After School</span>
        </div>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Explore the Full Curriculum</h2>
        <p>See how the Ghanaian, British, American, OIC and Montessori approaches come together.</p>
        <div class="cta-panel__ctas">
          <a href="hybrid-curriculum.php" class="btn btn--primary">WWIS Values-Based Hybrid Curriculum</a>
          <a href="admissions.php" class="btn btn--outline">Start Admissions</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
