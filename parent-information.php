<?php
/**
 * New page (client standard, 2026-07-29). Hub for the "Parent Information" nav
 * section: links to the existing Downloads/FAQs pages; calendar, handbook and
 * policy documents don't exist as real assets yet, so this stays honest
 * (empty-state) rather than fabricating them, per CLAUDE.md's no-fabrication rule.
 */
$pageTitle = 'Parent Information';
$pageDescription = 'Information for WWIS parents and guardians: downloads, frequently asked questions, and how we communicate with families.';
$canonicalPath = '/parent-information.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Parent Information';
$pageHeroBg = 'asset/images/hero-graduation.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Parent Information', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">A Partnership Built on Trust</p>
      <h2>Working Together for Every Learner</h2>
      <p>At Wonder World International School, we believe that the strongest educational outcomes
        are achieved when families and schools work together in partnership. Parents and guardians
        are valued members of our school community, playing an essential role in supporting each
        learner's academic progress, wellbeing, character development and personal growth.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('document') ?></div>
          <h3>Downloads</h3>
          <p>Downloadable forms and documents for current and prospective families.</p>
          <a href="downloads.php" class="btn btn--ghost">View Downloads →</a>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('chat') ?></div>
          <h3>FAQs</h3>
          <p>Answers to common questions about admissions, curriculum, fees, hours and school
            life.</p>
          <a href="faqs.php" class="btn btn--ghost">View FAQs →</a>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('shield') ?></div>
          <h3>Policies</h3>
          <p>Safeguarding, anti-bullying, health &amp; safety and dress code policies.</p>
          <a href="safeguarding-policy.php" class="btn btn--ghost">View Policies →</a>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Coming Soon</p>
      <div class="empty-state" data-reveal>
        <div class="empty-state__icon" aria-hidden="true"><?= icon('calendar') ?></div>
        <p>Our school calendar, parent handbook, and full attendance, behaviour and fee policies
          are being prepared for publication here. For any of these now, or with a question or
          concern, please reach out via our established communication channels below.</p>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Working Together</p>
      <h2>How Parents Can Stay Involved</h2>
      <ul class="checklist">
        <li>Share information that supports your child's learning and wellbeing</li>
        <li>Attend parent consultations, workshops and school events</li>
        <li>Support regular attendance, punctuality and positive learning habits</li>
        <li>Reinforce the school's values and expectations at home</li>
        <li>Communicate questions or concerns through the school's established procedures</li>
        <li>Work collaboratively with teachers and school leaders to support learner success</li>
      </ul>
    </div>
  </section>

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Supporting Every Child's Success</p>
      <h2>Together, We Help Every Learner Develop</h2>
      <ul class="checklist">
        <li>Academic confidence</li>
        <li>Integrity and positive character</li>
        <li>Leadership and responsibility</li>
        <li>Healthy relationships</li>
        <li>Independence and resilience</li>
        <li>Respect for others</li>
        <li>A lifelong love of learning</li>
      </ul>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Have a Question?</h2>
        <p>Reach out any time. Our team is ready to help.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Us</a>
          <a href="faqs.php" class="btn btn--outline">Browse FAQs</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
