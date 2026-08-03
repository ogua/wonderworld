<?php
$pageTitle = 'Leadership';
$pageDescription = 'Leadership at Wonder World International School: Principal Mrs. Jalia Dekyi, our governance structure, and our academic leadership team.';
$canonicalPath = '/management-team.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Leadership';
$pageHeroBg = 'asset/images/facilities-building-2.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Leadership', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Leadership That Shapes the Future</p>
      <h2>Leading With Integrity, Accountability and Service</h2>
      <p>At Wonder World International School, leadership is built on integrity, accountability,
        service and an unwavering commitment to educational excellence. Our leaders inspire a
        culture where every learner is known, valued, challenged and supported to flourish,
        creating the vision, culture and conditions that enable outstanding teaching, meaningful
        learning and continuous school improvement.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 600px;">
      <div class="arc-frame">
        <span class="arc-frame__ring" aria-hidden="true"></span>
        <img src="asset/images/principal-jalia-dekyi.jpg" alt="Mrs. Jalia Dekyi, Principal of Wonder World International School" loading="lazy">
      </div>
      <div class="portrait-caption">
        <strong>Mrs. Jalia Dekyi</strong>
        <span>Principal / Head of School</span>
      </div>
      <p style="text-align:center; margin-top: var(--space-lg);">Read Mrs. Dekyi's full welcome to
        every WWIS family on the <a href="principal-message.php">Principal's Message page</a>.</p>
    </div>
  </section>

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Leading with Purpose</p>
      <h2>What Our Leadership Team is Committed To</h2>
      <ul class="checklist">
        <li>Providing strategic direction that places learners at the heart of every decision</li>
        <li>Promoting excellence in teaching, learning and assessment</li>
        <li>Fostering a safe, inclusive and values-driven school culture</li>
        <li>Championing learner wellbeing and safeguarding</li>
        <li>Supporting the professional growth of every member of staff</li>
        <li>Building strong partnerships with parents and the wider community</li>
        <li>Using evidence-informed practice to monitor progress and drive continuous improvement</li>
      </ul>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Developing Exceptional Educators</p>
      <h2>Outstanding Schools Are Built by Outstanding Educators</h2>
      <p>WWIS is committed to continuous professional learning that strengthens curriculum
        implementation, learner-centred teaching, assessment, safeguarding, inclusion, wellbeing
        and educational leadership. Through ongoing reflection and professional development, our
        staff continually enhance their knowledge, skills and practice to provide exceptional
        learning experiences for every learner.</p>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Our People</p>
        <h2>Governance and Academic Leadership</h2>
      </div>
      <div class="empty-state" data-reveal>
        <div class="empty-state__icon" aria-hidden="true"><?= icon('people') ?></div>
        <p>Our board/governance structure and the rest of our academic leadership team's profiles
          are being finalised for publication here. In the meantime, meet our
          <a href="teachers.php">teaching staff</a>, or reach our leadership team directly via
          <a href="contact.php">Contact</a>.</p>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
