<?php
$pageTitle = 'Student & Staff Responsibility and Dress Code';
$pageDescription = 'Attendance and dress code expectations for students at Wonder World International School: uniforms, hair, footwear, and personal appearance.';
$canonicalPath = '/student-responsibility-dress-code.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Student & Staff Responsibility and Dress Code';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Policies', 'url' => null],
    ['label' => 'Dress Code', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container prose" style="max-width: 780px;">

      <h2>Attendance</h2>
      <p>Regular attendance is essential to the progress and achievement of every child. Thus:</p>
      <ol>
        <li>Student absenteeism should only occur for necessary and legitimate reasons, such as
          illness or medical appointments.</li>
        <li>Parents should arrange travel and vacation time to coincide with scheduled holidays
          and vacations as noted on the school's calendar.</li>
        <li>For an excused absence, parents must notify the school's administrator by phone or
          email before the day of absence, explaining the reason. On arrival back at school, the
          student will be advised of missed assignments, which must be completed in the time
          specified by the teacher(s).</li>
        <li>For extended and planned absence, parents must provide one week's notice to the
          school's administration, and consult with the principal or administrator and classroom
          teacher regarding the child's ability to progress academically following the
          absence.</li>
        <li>If a student is absent for 10 or more days within a term, they automatically fail that
          term. If a student is absent for 45 school days (25%) in a given school year, they may
          not be promoted to the next grade level.</li>
      </ol>

      <h2>Dress Code</h2>
      <p>All students of Wonder World International School are expected to abide by all rules and
        regulations. There are no exceptions.</p>

      <h3>Uniforms</h3>
      <p>Uniforms should be neat, clean, and in good repair. Students' personal appearance should
        reflect respect for themselves, their school, and the community. Students are expected to
        wear the school uniform every day. We have a strict dress code; any child who has a valid
        reason not to be in the correct uniform should provide a written excuse, signed by the
        parent/guardian. There is no provision for additions to school uniforms such as scarves,
        bandanas, or wristbands. In cold or wet weather, students may wear a pullover or cardigan
        over their uniform. Hoodies are not permitted in school.</p>

      <h3>Hair</h3>
      <p>Girls are not allowed to wear beads in their hair. Natural hair must be neatly kept, and
        all long braided or natural/permed hair must be held in a ponytail with a ribbon or band.
        Hair should not be left hanging. For boys, hair must be kept neat, short, and even on all
        sides. No hi-top fade haircuts, dyeing of hair, braids, or extravagant designs.</p>

      <h3>Shoes</h3>
      <p>Students should wear well-fitted closed-toe shoes, laced and tied, or sandals with a
        strap at the back, black or brown, worn with white socks (ankle or knee high). Bare feet,
        flip-flops, and crocs are not allowed.</p>

      <h3>Jewelry &amp; Make-Up</h3>
      <p>No jewelry is permitted except simple studs for girls with pierced ears (no chains,
        bangles, anklets, hoops, or wrist bands). Boys are not permitted to wear anything in their
        ears or hands. No make-up is permitted.</p>

      <h3>Hats, Caps, Headwear &amp; Sunglasses</h3>
      <p>Headwear and sunglasses may not be worn on the school premises.</p>

      <h3>Nails</h3>
      <p>Students' nails must be short, clean, with no nail polish, and well-trimmed.</p>

    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Questions About Our Policies?</h2>
        <p>Our admissions team is happy to clarify anything before you enrol.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
