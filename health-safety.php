<?php
/**
 * Note: the old site's dedicated "Covid Protocols" page referenced Delta-variant-era
 * guidance (2021) and is no longer current, so it is not carried forward here. This page
 * instead uses the school's general, evergreen Health Programme policy (illness, medication,
 * emergencies), which remains real and applicable regardless of any specific outbreak.
 * Confirm with the school whether a current infectious-illness protocol should be added.
 */
$pageTitle = 'Health & Safety';
$pageDescription = 'Health and safety policies at Wonder World International School: our health programme, illness procedures, medication policy, and emergency response.';
$canonicalPath = '/health-safety.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Health & Safety';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Policies', 'url' => null],
    ['label' => 'Health & Safety', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container prose" style="max-width: 780px;">

      <h2>Health Programme</h2>
      <p>The objectives of the school health programme are to:</p>
      <ul>
        <li>Provide initial first aid and treatment of minor ailments.</li>
        <li>Administer medication when authorised to.</li>
        <li>Promote healthy lifestyles and disease prevention.</li>
        <li>Assess need and call emergency services.</li>
        <li>Organise and coordinate health screening programmes.</li>
        <li>Maintain up-to-date student medical records and vaccines.</li>
      </ul>

      <h2>Illness at School</h2>
      <p>If a child is too ill to remain in class, they will be sent to the sick bay. After a
        period of rest and assessment, the child's parent may be called to pick up the student.
        Any student who develops a fever or exhibits any of the symptoms below will be sent home
        as soon as a parent or assigned guardian is able to pick up the student:</p>
      <ul>
        <li>Vomiting or diarrhoea</li>
        <li>Dizziness</li>
        <li>Injury where there is swelling, severe pain, or question of a sprain or broken bone</li>
        <li>Excessive coughing</li>
        <li>Excessive nasal drainage</li>
        <li>Eye injury</li>
        <li>Rash accompanied with fever</li>
      </ul>

      <h2>Health Policy</h2>
      <p>Students with a fever (&gt;100.0°F / &gt;38.0°C), diarrhoea, or vomiting may not attend
        school, so that infectious conditions are not spread to classmates and staff. Parents must
        notify the school immediately if a child has contracted a contagious disease. The school
        will inform parents of other students who may have come into contact with the contagious
        disease and notify them of symptoms. Children who need to take antibiotics for an
        infectious disease must remain at home until they have completed a full 72 hours of
        antibiotics, to ensure they are no longer contagious. After an ailment, a child should be
        symptom-free for a day or two before returning to school. For chicken pox specifically:
        from the first appearance of the rash until all blisters are dried and crusted over,
        children must not be in school.</p>

      <h2>Medication at School</h2>
      <p>If a child needs to take prescribed medication during school hours, regularly or for a
        short period of time, parents are required to meet with the school administrator and
        provide written prescriptions (this includes asthma inhalers). No child may self-administer
        medication. Medications must be stored in the students' compartments or the fridge and
        administered by the school teacher under the supervision of the school admin.</p>

      <h2>Emergencies</h2>
      <p>In the case of a serious emergency, the school will contact an emergency support service
        as a first priority, and thereafter the parents as soon as possible. Parents must ensure
        that the school has current emergency contact details for parents/guardians and for the
        family's doctor and clinic of choice.</p>

    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Have a Health-Related Question?</h2>
        <p>Reach out to our admissions team directly.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
