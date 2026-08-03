<?php
$pageTitle = 'About Us';
$pageDescription = "Who We Are, Our Vision, Mission, Educational Philosophy and 9 Core Values at Wonder World International School, a values-based international school committed to transformative education for the whole learner.";
$canonicalPath = '/about.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'About Us';
$pageHeroBg = 'asset/images/hero-campus-building.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'About', 'url' => null],
    ['label' => 'About Us', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 820px;">
      <p class="eyebrow">Who We Are</p>
      <h2>Transformative Education for the Whole Learner</h2>
      <p>Wonder World International School is a values-based international school committed to
        providing transformative education that develops the whole learner. We provide a caring,
        inclusive and academically challenging learning environment where learners are encouraged
        to grow intellectually, socially, emotionally, physically, spiritually and morally. Every
        learner is supported to discover their strengths, embrace challenges and develop the
        confidence to become responsible, compassionate and globally minded individuals.</p>
      <p>Our educational philosophy recognises that every learner is unique and capable of
        excellence when learning takes place within a culture of respect, high expectations,
        meaningful relationships and purposeful support.</p>

      <p>Wonder World started as a summer camp in July 2017, growing steadily into the school we
        are today, a journey we're proud to tell in full on our <a href="history.php">History
        page</a>. Along the way, we've stayed anchored to the same mission and vision below, and
        to the personal welcome our principal, Mrs. Jalia Dekyi, extends to every family. Read it
        in full on the <a href="principal-message.php">Principal's Message page</a>.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('globe') ?></div>
          <h3>Our Vision</h3>
          <p>To empower learners to excel academically and holistically, locally and globally,
            while nurturing leaders grounded in integrity, valuing excellence and dedicated to
            making a positive impact.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('target') ?></div>
          <h3>Our Mission</h3>
          <p>To provide transformative education that develops academic success, critical
            thinking, problem-solving, leadership and integrity through engaging, learner-centred
            educational experiences.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Our Values</p>
        <h2>Nine Values That Guide Everything We Do</h2>
        <p>These values shape our curriculum, leadership, relationships, decision-making and the
          everyday experiences of our learners and staff.</p>
      </div>
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('star') ?></div>
          <h3>Global Leadership</h3>
          <p>Developing leadership skills adaptable to diverse cultural and international
            contexts.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('people') ?></div>
          <h3>Respect</h3>
          <p>Treating every perspective with empathy and openness.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('trophy') ?></div>
          <h3>Excellence</h3>
          <p>Continuously striving for the highest achievable standards.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('compass') ?></div>
          <h3>Accountability</h3>
          <p>Taking responsibility for one's actions, diligently and ethically.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('puzzle') ?></div>
          <h3>Teamwork</h3>
          <p>Collaborative effort that values diversity in pursuit of shared goals.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('lightbulb') ?></div>
          <h3>Wonder</h3>
          <p>Approaching learning with curiosity and enquiry.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('book') ?></div>
          <h3>Wisdom</h3>
          <p>Applying knowledge thoughtfully to make sound, considered decisions.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('link') ?></div>
          <h3>Integrity</h3>
          <p>Adhering to ethical principles and honesty in all actions.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('heart') ?></div>
          <h3>Service</h3>
          <p>Contributing positively to society and the wellbeing of others.</p>
        </article>
      </div>
      <div style="text-align:center; margin-top: var(--space-lg);">
        <a href="vision-mission.php" class="btn btn--ghost">See the meaning behind each value →</a>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container split-panel split-panel--reverse" data-reveal>
      <div>
        <p class="eyebrow">Our Educational Philosophy</p>
        <h2>Active, Purposeful and Learner-Centred</h2>
        <p>At WWIS, learners are active participants in their own learning. Teaching encourages
          curiosity, enquiry, reflection and collaboration while developing the knowledge, skills
          and dispositions needed for lifelong success, delivered through our WWIS Values-Based
          Hybrid Curriculum, combining the Ghanaian, British and American curricula with the Oxford
          International Curriculum (OIC).</p>
        <ul class="checklist">
          <li>Active and purposeful learning</li>
          <li>Critical and creative thinking</li>
          <li>Effective communication and collaboration</li>
          <li>Character and leadership development</li>
          <li>Wellbeing and healthy relationships</li>
          <li>Global awareness and responsible citizenship</li>
          <li>Continuous personal growth</li>
        </ul>
        <a href="hybrid-curriculum.php" class="btn btn--primary">Explore the Curriculum</a>
      </div>
      <div class="split-panel__media arc-frame">
        <span class="arc-frame__ring" aria-hidden="true"></span>
        <img src="asset/images/principal-jalia-dekyi.jpg" alt="Mrs. Jalia Dekyi, Principal of Wonder World International School" loading="lazy">
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container" style="max-width: 820px;">
      <p class="eyebrow">Our Values in Practice</p>
      <h2>Non-Discrimination Policy</h2>
      <p>Wonder World International School admits students of any race, nationality, and ethnic
        group to all the rights and privileges, programs, and activities made available to
        students of the school. We do not discriminate on the basis of race, color, nationality,
        or ethnicity in the administration of our educational policies, admissions policies,
        athletics, or any other school-administered program.</p>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Want the Full Story?</h2>
        <p>See where we started, where we're going, and the values that hold it all together.</p>
        <div class="cta-panel__ctas">
          <a href="history.php" class="btn btn--primary">Our History</a>
          <a href="vision-mission.php" class="btn btn--outline">Vision &amp; Mission</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
