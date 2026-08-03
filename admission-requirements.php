<?php
$pageTitle = 'Admission Requirements';
$pageDescription = 'The step-by-step admission process at Wonder World International School, from the Preliminary Inquiry form through enrolment confirmation, plus our Special Educational Needs (SEN) policy.';
$canonicalPath = '/admission-requirements.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Admission Requirements';
$pageHeroBg = 'asset/images/hero-primary-campus.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Admissions', 'url' => 'admissions.php'],
    ['label' => 'Admission Requirements', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container prose" style="max-width: 780px;">
      <p class="eyebrow">Application Procedure</p>
      <h2>Admission Steps</h2>

      <ol>
        <li>Fill out the Preliminary Inquiry form (add a passport picture of your child).</li>
        <li>Acquire the Registration and Milestone Assessment package for a fee of GHS 1,000 (this
          amount is non-refundable).</li>
        <li>Submit the completed application forms along with all necessary documents to the
          Admissions Office.</li>
        <li>Parents or guardians will receive a letter detailing the admission decision. This
          letter will also include an invoice outlining all applicable fees and the enrolment
          contract.</li>
        <li>To confirm enrolment, return the signed contract and complete payment for admission,
          tuition, and any associated fees by the specified date.</li>
        <li>For students with recognized special education requirements, admissions decisions will
          consider these needs. When feasible, these students will be admitted and provided
          support in line with the Wonder World Care Special Educational Needs (SEN) policy.</li>
        <li>Wonder World International School strives to provide a comprehensive and inclusive
          educational experience; certain specialized services for students with Special
          Educational Needs may necessitate additional resources, professionals, or tools. As a
          result, these services may carry additional costs.</li>
      </ol>

      <p>The SEN policy ensures that all students, irrespective of their specific needs, have equal
        access to a premier education that fosters their full potential. This policy embodies our
        commitment to inclusivity, guiding the support for students identified with special
        educational needs within our institution.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container prose" style="max-width: 780px;">
      <p class="eyebrow">Before You Submit</p>
      <h2>Documents to Attach</h2>
      <p>Please attach the following to the admission form before returning it to the security post
        (and inform us via email, call, or WhatsApp):</p>
      <ul>
        <li>Copies of three terms' reports or academic certificates from the previous school, when
          the student is coming from another school or is 4 years or older.</li>
        <li>One passport-size picture.</li>
        <li>A copy of the photo page of your ward's passport or birth certificate, as proof of date
          of birth.</li>
        <li>A copy of immunization records or a doctor's report, where applicable.</li>
      </ul>
      <p>Once we receive the admission form, we will contact you with information on the next
        steps.</p>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Have Questions About the Process?</h2>
        <p>Our admissions team is happy to walk you through every step.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Admissions</a>
          <a href="admissions-curricular.php" class="btn btn--outline">Admissions &amp; Curricular Process</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
