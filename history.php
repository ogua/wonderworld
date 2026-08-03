<?php
$pageTitle = 'History';
$pageDescription = 'In July 2017, Wonder World International School sprang to life as a vibrant summer camp destination. See how a 20-student summer camp grew into a global-minded school.';
$canonicalPath = '/history.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Our History';
$pageHeroBg = 'asset/images/hero-human-chain.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'About', 'url' => 'about.php'],
    ['label' => 'History', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container prose" style="max-width: 780px;">
      <p class="eyebrow">From Summer Camp to School</p>
      <h2>A Journey That Started With 20 Students</h2>

      <p>In July 2017, Wonder World International School sprang to life as a vibrant summer camp
        destination where students could enjoy an enriching break full of interactive and
        educational activities. Quickly garnering a reputation as one of the best summer camps in
        the region, it attracted 20–25 students from various international and private schools
        across Accra. The demand grew, with families eager for branches across the country to
        experience the transformative, fun learning experiences we offered.</p>

      <p>In response to the significant demand and the positive influence the camp had on
        students, we metamorphosed Wonder World into a daycare centre in October 2017. We started
        humbly, with just three students for one term, nurturing the dream of someday catering to
        over three hundred eager learners. Despite the humble beginnings, the foundation was firm,
        rooted in joy and a commitment to fostering a nurturing, safe, and enjoyable learning
        environment.</p>

      <p>By 2020, we experienced steady growth, reaching a milestone of 15 students. The journey
        was embraced with a resilient and learning spirit. Then we were met with the unprecedented
        challenge of the Covid-19 pandemic. It spurred us to launch an online school that broke
        geographical barriers, reaching students globally, including in Nigeria and the United
        Kingdom. Spearheaded by the incredible Ms. Bertha Whitscger-Cossoh, we transitioned swiftly
        and efficiently to a virtual format, supporting students who could not yet return to
        traditional classroom settings, and retaining the faith and participation of 6 devoted
        students through the transition.</p>

      <p>In 2021, as we reopened after a one-year hiatus due to the pandemic, we welcomed back our
        persistent group of six students and Ms. Bertha Cossoh, along with an encouraging addition
        of 14 new students, breathing fresh life and energy into our vibrant school community. We
        hailed this triumphant return as a testament to our resilience, adaptability, and unyielding
        commitment to our educational mission.</p>

      <p>As we look back, our hearts swell with pride seeing the growth from a small yet cherished
        summer camp to a blossoming educational hub. We remain steadfast in our commitment to
        nurturing our students at every stage, eager to meet the diverse needs and unlock the
        boundless potential of our students, wherever in the world they may be.</p>

      <p>We remain focused on the goal of being acknowledged not just in our locality but
        nationally and globally as a first-rate educational institution. At Wonder World
        International School, we blend joy with education, laying a robust foundation for our
        learners to champion a future that is not only bright for them but also elevates the world
        to a higher standard. The journey continues, and we steer forward with the same spirit of
        joy, nurturing, and boundless potential that has guided us since our inception.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Meet the Woman Behind the Vision</h2>
        <p>Read Mrs. Jalia Dekyi's personal welcome to every WWIS family.</p>
        <div class="cta-panel__ctas">
          <a href="principal-message.php" class="btn btn--primary">Principal's Message</a>
          <a href="vision-mission.php" class="btn btn--outline">Vision &amp; Mission</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
