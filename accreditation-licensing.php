<?php
/**
 * New page (client standard, 2026-07-29). Wording here is deliberately exact
 * per CLAUDE.md's Accreditation & Compliance Language section: OIC is "progressing
 * through" accreditation, not accredited; NaSIA is "works towards compliance," not
 * "licensed by." Do not loosen either claim when editing this page.
 */
$pageTitle = 'Accreditation and Licensing';
$pageDescription = "Wonder World International School's commitment to educational excellence: our progress toward Oxford International Curriculum accreditation and our work toward National Schools Inspectorate Authority (NaSIA) compliance.";
$canonicalPath = '/accreditation-licensing.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Accreditation and Licensing';
$pageHeroBg = 'asset/images/hero-primary-campus.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Accreditation and Licensing', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Our Commitment to Educational Excellence</p>
      <h2>Meeting National Requirements, Pursuing International Standards</h2>
      <p>Wonder World International School is committed to delivering education that meets
        recognised national requirements while pursuing internationally benchmarked standards of
        educational quality. Through strong leadership, effective governance, safeguarding,
        continuous professional development and evidence-informed practice, WWIS continually
        strengthens the quality of teaching, learning and the overall learner experience.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container card-grid" data-reveal>
      <article class="card">
        <div class="card__icon" aria-hidden="true"><?= icon('graduation-cap') ?></div>
        <h3>Oxford International Curriculum: Accreditation in Progress</h3>
        <p>WWIS has adopted the Oxford International Curriculum (OIC) as a key component of its
          educational model and is <strong>currently progressing through the Oxford International
          Curriculum accreditation process</strong>. It is not yet an OIC-accredited school. The
          accreditation process provides a rigorous framework for evaluating curriculum
          implementation, teaching and learning, leadership, learner wellbeing, safeguarding,
          inclusion, assessment and continuous school improvement against internationally
          recognised quality standards. As WWIS progresses through this journey, the school
          continues to strengthen its systems, practices and educational provision to ensure
          learners benefit from a high-quality international education that is learner-centred,
          values-driven and globally relevant.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true"><?= icon('shield') ?></div>
        <h3>National Registration and Licensing</h3>
        <p>WWIS operates within the regulatory framework of the Republic of Ghana and is committed
          to meeting all applicable statutory requirements governing private education. The school
          <strong>works towards compliance</strong> with the standards and requirements of the
          National Schools Inspectorate Authority (NaSIA) and other relevant educational
          authorities, ensuring that governance, health and safety, safeguarding, staffing and
          educational provision meet national expectations.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true"><?= icon('refresh') ?></div>
        <h3>Continuous Quality Improvement</h3>
        <p>At WWIS, quality assurance is an ongoing process rather than a one-time achievement.
          The school regularly reviews curriculum implementation, teaching quality, learner
          progress, safeguarding, inclusion, wellbeing, leadership and professional learning to
          strengthen educational provision and improve outcomes for every learner.</p>
      </article>
    </div>
  </section>

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <div class="empty-state" data-reveal>
        <div class="empty-state__icon" aria-hidden="true"><?= icon('document') ?></div>
        <p>Certificates, formal partnership documentation and verification details will be
          published here as each stage of accreditation and licensing is confirmed. For the
          current status of a specific credential, please contact us directly.</p>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Questions About Our Curriculum or Standing?</h2>
        <p>Learn more about the WWIS Values-Based Hybrid Curriculum, or reach out with any
          accreditation or licensing questions.</p>
        <div class="cta-panel__ctas">
          <a href="hybrid-curriculum.php" class="btn btn--primary">Explore Our Curriculum</a>
          <a href="contact.php" class="btn btn--outline">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
