<?php
$pageTitle = "Principal's Message";
$pageDescription = "Greetings to our cherished parents, guardians, and remarkable community of learners: a personal welcome from Mrs. Jalia Dekyi, Principal of Wonder World International School.";
$canonicalPath = '/principal-message.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = "Principal's Message";
$pageHeroBg = 'asset/images/facilities-building-2.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'About', 'url' => 'about.php'],
    ['label' => "Principal's Message", 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band" style="padding-bottom: 0;">
    <div class="container">
      <div class="arc-frame">
        <span class="arc-frame__ring" aria-hidden="true"></span>
        <img src="asset/images/principal-jalia-dekyi.jpg" alt="Mrs. Jalia Dekyi, Principal of Wonder World International School" loading="lazy">
      </div>
      <div class="portrait-caption">
        <strong>Mrs. Jalia Dekyi</strong>
        <span>Principal</span>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container prose" style="max-width: 780px;">
      <p>Greetings to our cherished parents, guardians, and remarkable community of learners,</p>

      <p>I am Mrs. Jalia Dekyi, and it is with great honour and a heart full of joy that I welcome
        you to Wonder World International School.</p>

      <p>In the nurturing ground of WWIS, where dreams take root, we witness a harmonious blend of
        the rich educational philosophies drawn from various corners of the world. My journey
        through different educational systems across a myriad of countries has instilled in me a
        deep appreciation for diverse learning styles. It has gifted me a vision to
        foster a learning environment that is not just rich in knowledge but steeped in values,
        fostering holistic growth in our learners.</p>

      <p>At WWIS, we stand tall on our WWIS Values-Based Hybrid Curriculum: a unique blend of the
        Ghanaian, British, and American educational spheres, enriched with the Oxford
        International Curriculum (OIC) and the Montessori approach for our preschool prodigies.
        This integrated approach is not merely a curriculum; it is a commitment to nurturing
        global citizens who are ready to champion change with integrity and excellence.</p>

      <p>Our journey since 2017 has been one of transformation, resilience, and untiring spirit to
        rise above challenges, including the unprecedented Covid-19 pandemic. It has been a journey
        where each hurdle strengthened our resolve to forge ahead with unwavering determination.</p>

      <p>As we stride forward, we are guided by core values that are more than just words; they are
        principles embedded in the heart of our educational ethos:</p>

      <ul>
        <li><strong>Global Leadership</strong>: developing in our students an understanding and
          appreciation for diverse cultures.</li>
        <li><strong>Respect</strong>: promoting a culture of understanding and appreciation for
          diverse perspectives.</li>
        <li><strong>Excellence</strong>: encouraging them to aspire for the highest standards.</li>
        <li><strong>Accountability</strong>: instilling self-discipline and a commitment to
          ethical behaviour.</li>
        <li><strong>Teamwork</strong>: fostering collaborative spirits and a sense of
          community.</li>
        <li><strong>Wonder</strong>: nurturing curiosity and a genuine desire to explore and
          question.</li>
        <li><strong>Wisdom</strong>: helping them apply what they learn thoughtfully and well.</li>
        <li><strong>Integrity</strong>: teaching them to be principled and honest individuals.</li>
        <li><strong>Service</strong>: nurturing a spirit of generosity and social
          responsibility.</li>
      </ul>

      <p>I invite each one of you to become an active participant in this remarkable journey. Let
        us work hand in hand, believing in the transformative power of education, as we nurture our
        students to be not just scholars but individuals with great hearts, ready to serve and
        uplift society.</p>

      <p>Together, let's build a community where every child is a global champion, a beacon of
        hope, integrity, and excellence. I invite you to trust us, to believe in our vision, and to
        work collaboratively to shape a future that is bright not just for our learners, but for
        society as a whole. Thank you for entrusting us with the most precious gift: your
        children, the global leaders of tomorrow.</p>

      <p>Together, towards a future replete with joy, discovery, and unparalleled growth.</p>

      <p><em>With warm regards,<br>Mrs. Jalia Dekyi</em></p>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Ready to Begin the Journey?</h2>
        <p>Start your child's admission into the WWIS family today.</p>
        <div class="cta-panel__ctas">
          <a href="admissions.php" class="btn btn--primary">Start Admissions</a>
          <a href="contact.php" class="btn btn--outline">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
