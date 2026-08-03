<?php
$pageTitle = "Vision & Mission";
$pageDescription = 'Our mission, vision, and the nine core values that guide Wonder World International School: Global Leadership, Respect, Excellence, Accountability, Teamwork, Wonder, Wisdom, Integrity and Service.';
$canonicalPath = '/vision-mission.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Vision & Mission';
$pageHeroBg = 'asset/images/hero-human-chain.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'About', 'url' => 'about.php'],
    ['label' => 'Vision & Mission', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container">
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('target') ?></div>
          <h3>Our Mission</h3>
          <p>To provide transformative education that develops academic success, critical
            thinking, problem-solving, leadership and integrity through engaging, learner-centred
            educational experiences.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('globe') ?></div>
          <h3>Our Vision</h3>
          <p>To empower learners to excel academically and holistically, locally and globally,
            while nurturing leaders grounded in integrity, valuing excellence and dedicated to
            making a positive impact.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">What Guides Every Decision</p>
        <h2>Our 9 Core Values</h2>
      </div>

      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('star') ?></div>
          <h3>Global Leadership</h3>
          <p><strong>Meaning:</strong> Developing leadership skills adaptable to various cultural
            and international contexts.</p>
          <p><strong>Why it matters:</strong> Vital in today's interconnected world for
            understanding diversity and fostering positive global change.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('people') ?></div>
          <h3>Respect</h3>
          <p><strong>Meaning:</strong> Treating others with empathy and recognising the value of
            diverse perspectives.</p>
          <p><strong>Why it matters:</strong> Encourages positive relationships and a supportive
            community through open communication and inclusivity.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('trophy') ?></div>
          <h3>Excellence</h3>
          <p><strong>Meaning:</strong> Continuously striving for the highest achievable standards
            in all tasks.</p>
          <p><strong>Why it matters:</strong> Encourages a growth mindset, promoting personal and
            academic success through dedication.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('compass') ?></div>
          <h3>Accountability</h3>
          <p><strong>Meaning:</strong> Being responsible for one's actions and fulfilling
            obligations diligently.</p>
          <p><strong>Why it matters:</strong> Promotes self-discipline and ethical behaviour,
            fostering personal growth.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('puzzle') ?></div>
          <h3>Teamwork</h3>
          <p><strong>Meaning:</strong> Collaborative efforts valuing diversity and harmonious
            pursuit of shared objectives.</p>
          <p><strong>Why it matters:</strong> Essential for forging strong relationships and
            solving complex problems through collective strength.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('lightbulb') ?></div>
          <h3>Wonder</h3>
          <p><strong>Meaning:</strong> Approaching learning with curiosity, enquiry and a genuine
            desire to explore.</p>
          <p><strong>Why it matters:</strong> Curiosity is the starting point for deep learning.
            It keeps students asking questions long after the answer is given.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('book') ?></div>
          <h3>Wisdom</h3>
          <p><strong>Meaning:</strong> Applying knowledge thoughtfully, using what's learned to
            make sound, considered decisions.</p>
          <p><strong>Why it matters:</strong> Turns academic learning into good judgement that
            serves students well beyond the classroom.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('link') ?></div>
          <h3>Integrity</h3>
          <p><strong>Meaning:</strong> Adhering to ethical principles and maintaining honesty in
            all actions.</p>
          <p><strong>Why it matters:</strong> The bedrock of trust and moral character, encouraging
            students to approach situations with fairness.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('heart') ?></div>
          <h3>Service</h3>
          <p><strong>Meaning:</strong> Contributing positively to society through acts of
            service.</p>
          <p><strong>Why it matters:</strong> Develops empathy and a strong sense of social
            responsibility, encouraging a commitment to the wellbeing of others.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>See These Values in Action</h2>
        <p>Discover the hybrid curriculum built to bring our mission to life every day.</p>
        <div class="cta-panel__ctas">
          <a href="hybrid-curriculum.php" class="btn btn--primary">WWIS Values-Based Hybrid Curriculum</a>
          <a href="admissions.php" class="btn btn--outline">Start Admissions</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
