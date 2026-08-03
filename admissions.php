<?php
require_once __DIR__ . '/db/db.php';

$pageTitle = 'Admissions';
$pageDescription = 'Start the admissions process at Wonder World International School: regular admission, summer school, online school, after-school club, Saturday care, and extra-curricular activities.';
$canonicalPath = '/admissions.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Admissions';
$pageHeroBg = 'asset/images/hero-primary-campus.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Admissions', 'url' => null],
];
require 'partials/page-hero.php';

$returnUrlParam = '?return_url=' . urlencode($siteUrl . '/admissions.php');
$applyUrl = rtrim($schoolurl, '/') . '/apply/' . rawurlencode($uniqueid) . '/pay' . $returnUrlParam;
$applyOnlineFirstUrl = rtrim($schoolurl, '/') . '/apply/' . rawurlencode($uniqueid) . $returnUrlParam;
$bookTourUrl = rtrim($schoolurl, '/') . '/book-tour/' . rawurlencode($uniqueid) . $returnUrlParam;
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Join the WWIS Community</p>
      <h2>Admissions Are Open Year-Round</h2>
      <p>Choosing the right school is one of the most important decisions a family makes, and we
        are delighted that you are considering Wonder World International School. We welcome
        applications from learners who will benefit from our educational philosophy, values and
        learner-centred approach to education. Our admissions process is designed to be welcoming,
        transparent and supportive, helping families make informed decisions while ensuring that
        every learner is given the best possible start at WWIS.</p>
      <p>Our academic year starts each January, but admissions into Wonder World International
        School are ongoing throughout the year. We admit children from three months of age into
        our daycare and preschool, through primary school currently up to Grade 2, with room built
        in for expansion as our classes grow.</p>
      <p>Ready to apply? See the full <a href="admission-requirements.php">step-by-step admission
        requirements</a>, or explore the practical details of school life on our
        <a href="admissions-curricular.php">Admissions &amp; Curricular Process page</a>.</p>
    </div>
  </section>

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Our Admissions Process</p>
      <h2>Getting to Know Every Learner</h2>
      <p>Admissions are conducted fairly and respectfully, recognising every learner as an
        individual. As part of the admissions process, we consider:</p>
      <ul class="checklist">
        <li>Previous educational experience</li>
        <li>Current stage of learning</li>
        <li>Language development</li>
        <li>Wellbeing and additional support needs</li>
        <li>Individual interests and strengths</li>
        <li>Information shared by parents or guardians</li>
      </ul>
      <p>Age-appropriate observations or assessments may be used to establish appropriate starting
        points for learning and to support successful transition into the school community.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Programs Offered</p>
        <h2>Choose the Right Fit for Your Child</h2>
      </div>
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('home') ?></div>
          <h3>Regular Admission</h3>
          <p>Our core academic program, built on the WWIS hybrid curriculum.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('sun') ?></div>
          <h3>Summer School</h3>
          <p>The program WWIS was born from: fun, interactive learning over the long break.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('laptop') ?></div>
          <h3>Online School</h3>
          <p>A global classroom for students not yet fully transitioned to in-person learning.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('backpack') ?></div>
          <h3>After School Club</h3>
          <p>Safe, engaging care and activities once the academic day ends.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('calendar') ?></div>
          <h3>Saturday Care</h3>
          <p>Weekend care for families who need it, without compromising on quality.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('palette') ?></div>
          <h3>Extra-Curricular Activities</h3>
          <p>Super Readers Club, Swimming, Tennis, Ballet, and Abacus with BraiNest.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container split-panel">
      <div>
        <p class="eyebrow">Inclusive Admissions</p>
        <h2>Equitable Access for Every Learner</h2>
        <p>WWIS is committed to equitable access and does not discriminate unfairly during
          admissions. Where additional educational, wellbeing or learning needs are identified,
          the school works closely with families to determine appropriate provision based on
          available staffing, facilities and professional expertise, while communicating openly
          about the support the school can reasonably provide. For students with recognized
          special education requirements, this is guided by the Wonder World Care SEN policy.</p>
      </div>
      <div>
        <p class="eyebrow">Next Step</p>
        <h2>How to Apply</h2>
        <p>Our full admission process is a simple 7-step path from inquiry to enrolment. See it
          laid out in detail, along with document requirements, on the Admission Requirements
          page. Ready now? Pay the admission fee online first, and we'll text and email you a link
          to finish the application (or a form to print and fill by hand), or you can fill in the
          full application first if you prefer.</p>
        <div class="cta-panel__ctas">
          <a href="<?= htmlspecialchars($applyUrl) ?>" class="btn btn--primary">Pay Admission Fee</a>
          <a href="<?= htmlspecialchars($applyOnlineFirstUrl) ?>" class="btn btn--outline">Apply Online First</a>
          <a href="admission-requirements.php" class="btn btn--outline">View Admission Requirements</a>
        </div>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Partnering with Families</p>
      <h2>Home and School, Working Together</h2>
      <p>We believe successful education is built upon a strong partnership between home and
        school. From the first enquiry through to enrolment and beyond, parents and guardians are
        valued partners in their child's educational journey. By working together, we create the
        strongest possible foundation for every learner's success, wellbeing and personal
        growth.</p>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Questions Before You Apply?</h2>
        <p>Reach out directly and our admissions team will walk you through it, or book a paid
          campus tour to see WWIS for yourself.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Us</a>
          <a href="<?= htmlspecialchars($bookTourUrl) ?>" class="btn btn--outline">Book a Tour</a>
          <a href="https://api.whatsapp.com/send?phone=+233558230501&text=Hello" target="_blank" rel="noopener" class="btn btn--outline">WhatsApp Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
