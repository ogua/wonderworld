<?php
$pageTitle = 'Frequently Asked Questions';
$pageDescription = 'Answers to common questions about admissions, curriculum, fees, hours, and school life at Wonder World International School.';
$canonicalPath = '/faqs.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Frequently Asked Questions';
$pageHeroBg = 'asset/images/hero-campus-building.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Parent Information', 'url' => 'parent-information.php'],
    ['label' => 'FAQs', 'url' => null],
];
require 'partials/page-hero.php';

$faqs = [
    ['q' => 'What curriculum does WWIS follow?', 'a' => 'The WWIS Values-Based Hybrid Curriculum blends the Ghanaian, British and American educational systems with the Oxford International Curriculum (OIC) and a Montessori approach for our preschoolers.'],
    ['q' => 'What ages do you admit?', 'a' => 'We admit children from three months of age into our daycare and preschool, through primary school currently up to Grade 2, with room built in for expansion as our classes grow.'],
    ['q' => 'How do I start the admissions process?', 'a' => 'Fill out our Preliminary Inquiry form (with a passport picture of your child), then follow the 7-step process on our Admission Requirements page. Our admissions team can also walk you through it directly via Contact or WhatsApp.'],
    ['q' => 'What programs do you offer?', 'a' => 'Regular Admission, Summer School, Online School, After School Club, Saturday Care, and Extra-Curricular Activities including Super Readers Club, Swimming, Tennis, Ballet, and Abacus with BraiNest.'],
    ['q' => 'What are your school hours?', 'a' => 'School runs 8:00am–2:00pm, with Extra-Curricular activities from 2:00–3:00pm. Pick-up is between 3:00 and 5:00pm, and After School care runs 3:00–7:00pm.'],
    ['q' => 'Do you offer after-school or Saturday care?', 'a' => 'Yes. After-School Activities run Monday–Friday, 17:00–19:00. Saturday School runs 9am–5pm with swimming, Super Readers Club, homework help, dance club, and more.'],
    ['q' => 'What are the after-school care rates?', 'a' => 'Daily: GHS 20/hr. Weekly: GHS 150. Monthly (4 weeks): GHS 600.'],
    ['q' => 'How many terms are in the academic year?', 'a' => 'Three: First Term (January–April), Second Term (May–August), and Third Term (September–December), with 2–3 week vacation breaks between terms.'],
    ['q' => 'Do you support students with special educational needs?', 'a' => 'Yes. Admissions decisions consider recognized special education requirements directly, and where feasible, students are admitted and supported under our Wonder World Care SEN policy.'],
    ['q' => 'Where is the school located?', 'a' => 'Adjiriganor, East Legon (Father Odai Kwabina Street), GD-210-9384, Accra, Ghana.'],
    ['q' => 'How can I get in touch?', 'a' => 'Call or WhatsApp +233 55 823 0501, email wonderworldintsch@gmail.com, or use the form on our Contact page.'],
];
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <div class="accordion">
        <?php foreach ($faqs as $i => $faq): $panelId = 'faq-page-' . $i; ?>
          <div class="accordion__item">
            <h3 style="margin:0;">
              <button class="accordion__trigger" aria-expanded="false" aria-controls="<?= $panelId ?>">
                <?= htmlspecialchars($faq['q']) ?>
                <span class="accordion__icon" aria-hidden="true">+</span>
              </button>
            </h3>
            <div class="accordion__panel" id="<?= $panelId ?>" data-open="false">
              <div class="accordion__panel-inner">
                <p><?= htmlspecialchars($faq['a']) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Still Have Questions?</h2>
        <p>We're happy to help directly.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Us</a>
          <a href="https://api.whatsapp.com/send?phone=+233558230501&text=Hello" target="_blank" rel="noopener" class="btn btn--outline">WhatsApp Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
