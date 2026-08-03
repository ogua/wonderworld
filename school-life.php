<?php
/**
 * New page (client standard, 2026-07-29). Hub for the "School Life" nav section:
 * links out to the existing Gallery/Events/Facilities pages rather than duplicating
 * their content, and is honest (empty-state) about uniforms/meals/transport, which
 * aren't yet confirmed real facts per CLAUDE.md's no-fabrication rule.
 */
$pageTitle = 'School Life';
$pageDescription = 'Life at Wonder World International School: daily school hours, clubs and activities, excursions and events, and our campus facilities.';
$canonicalPath = '/school-life.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'School Life';
$pageHeroBg = 'asset/images/hero-human-chain.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'School Life', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Every Day is an Opportunity to Grow</p>
      <h2>Learning Beyond the Classroom</h2>
      <p>School life at Wonder World International School is designed to inspire curiosity, build
        confidence and develop character. Beyond academic learning, learners participate in
        experiences that promote leadership, creativity, teamwork, resilience and service,
        helping them become responsible, compassionate and globally minded citizens. Learning
        continues beyond the classroom through meaningful experiences that encourage learners to:</p>
      <ul class="checklist">
        <li>Develop leadership and responsibility</li>
        <li>Think creatively and solve real-world problems</li>
        <li>Work collaboratively with others</li>
        <li>Build confidence and resilience</li>
        <li>Appreciate different cultures and perspectives</li>
        <li>Care for the environment through sustainability initiatives</li>
        <li>Make positive contributions through service and community engagement</li>
      </ul>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Wellbeing at the Heart of School Life</p>
      <h2>A Whole-School Approach</h2>
      <p>Wellbeing is embedded throughout every aspect of school life. Our whole-school approach
        promotes:</p>
      <ul class="checklist">
        <li>Healthy habits of body and mind</li>
        <li>Positive relationships and mutual respect</li>
        <li>Emotional wellbeing and resilience</li>
        <li>Physical health and personal safety</li>
        <li>Character development and responsible decision-making</li>
        <li>Learner leadership and meaningful participation</li>
        <li>A strong sense of belonging within an inclusive community</li>
      </ul>
      <p>Every learner is encouraged to explore their interests and talents through leadership
        opportunities, clubs, creative arts, sports, collaborative projects and service initiatives
        that enrich learning and support holistic development.</p>
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
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Explore School Life</p>
        <h2>Moments, Milestones and Our Campus</h2>
      </div>
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('palette') ?></div>
          <h3>Gallery</h3>
          <p>Real photos from excursions, celebrations, sports day and everyday life at WWIS.</p>
          <a href="gallery.php" class="btn btn--ghost">View Gallery →</a>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('calendar') ?></div>
          <h3>Events</h3>
          <p>Sports day, graduation, karate grading, and seasonal celebrations throughout the
            year.</p>
          <a href="events.php" class="btn btn--ghost">View Events →</a>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('home') ?></div>
          <h3>Facilities</h3>
          <p>Our purpose-built East Legon campus, covered outdoor play space, and growing Primary
            Department campus.</p>
          <a href="facilities.php" class="btn btn--ghost">View Facilities →</a>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Uniforms, Meals &amp; Transport</p>
      <div class="empty-state" data-reveal>
        <div class="empty-state__icon" aria-hidden="true"><?= icon('backpack') ?></div>
        <p>Details on uniforms, meals and transport arrangements are being prepared for
          publication here. In the meantime, our team is happy to answer these questions directly:
          reach out via <a href="contact.php">Contact</a>.</p>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>See WWIS Life for Yourself</h2>
        <p>Book a school tour and experience a day in the life of a WWIS learner.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Book a School Tour</a>
          <a href="admissions.php" class="btn btn--outline">Start Admissions</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
