<?php
$pageTitle = 'WWIS Values-Based Hybrid Curriculum';
$pageDescription = 'The WWIS Values-Based Hybrid Curriculum blends the Ghanaian, British and American educational systems with the Oxford International Curriculum (OIC) and a Montessori approach for preschoolers.';
$canonicalPath = '/hybrid-curriculum.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'WWIS Values-Based Hybrid Curriculum';
$pageHeroBg = 'asset/images/hero-campus-building.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Curriculum', 'url' => 'academics.php'],
    ['label' => 'WWIS Values-Based Hybrid Curriculum', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Our Approach</p>
      <h2>A Broad, Balanced and Future-Focused Curriculum</h2>
      <p>Wonder World International School delivers its WWIS Values-Based Hybrid Curriculum,
        bringing together carefully selected elements of the Ghanaian, British and American
        curricula alongside the internationally recognised Oxford International Curriculum (OIC),
        plus a Montessori approach for our preschoolers. This integrated approach enables learners
        to achieve strong academic outcomes while developing the knowledge, skills, character and
        global outlook required to thrive in an increasingly interconnected world.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Oxford International Curriculum</p>
      <h2>Learner-Centred, Enquiry-Led, Globally Relevant</h2>
      <p>The Oxford International Curriculum enriches learning through a learner-centred approach
        that promotes enquiry, critical thinking, collaboration, creativity and meaningful
        real-world application. Learning is progressive, engaging and designed to help learners
        make connections across subjects while developing confidence, independence and a genuine
        love of learning. The curriculum also places strong emphasis on learner wellbeing, global
        skills and sustainability, ensuring that education prepares young people not only for
        examinations, but also for responsible participation in society.</p>
      <p>WWIS has adopted OIC as part of its curriculum and is currently progressing through the
        OIC accreditation process. See our
        <a href="accreditation-licensing.php">Accreditation and Licensing</a> page for full,
        precise status details.</p>
    </div>
  </section>

  <section class="content-band">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Teaching and Learning</p>
      <h2>Inclusive, Evidence-Informed, Responsive</h2>
      <p>Teaching at WWIS is inclusive, evidence-informed and responsive to individual learner
        needs. Our teachers create purposeful learning experiences that encourage learners to
        think critically, solve authentic problems, ask meaningful questions, collaborate
        effectively, communicate confidently, reflect on their learning and apply knowledge in
        meaningful contexts. Through enquiry, discussion, investigation, project-based learning
        and real-world application, learners are encouraged to become confident, independent and
        responsible learners.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container split-panel" data-reveal>
      <div>
        <p class="eyebrow">Wellbeing, Character and Global Citizenship</p>
        <h2>Woven Through Every Part of School Life</h2>
        <p>Wellbeing is woven throughout every aspect of school life rather than being treated as
          a separate programme. Every learning experience contributes to developing capable,
          compassionate and globally responsible young people. Learners develop:</p>
        <ul class="checklist">
          <li>Healthy habits of body and mind</li>
          <li>Emotional resilience</li>
          <li>Positive relationships</li>
          <li>Responsible decision-making</li>
          <li>Integrity and accountability</li>
          <li>Leadership and service</li>
          <li>Global awareness and environmental responsibility</li>
        </ul>
      </div>
      <div>
        <p class="eyebrow">Inclusive Learning</p>
        <h2>Every Learner Deserves the Opportunity to Succeed</h2>
        <p>Teaching is differentiated to recognise individual strengths, interests and learning
          needs. Appropriate support, reasonable adjustments and inclusive practices enable every
          learner to participate fully, make meaningful progress and achieve their potential.</p>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container card-grid" data-reveal>
      <article class="card">
        <div class="card__icon" aria-hidden="true"><?= icon('refresh') ?></div>
        <h3>Adaptive Learning Experience</h3>
        <p>Merging various educational philosophies gives students a diverse learning landscape,
          preparing them to adapt easily to different teaching styles as they progress to higher
          levels of education.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true"><?= icon('globe') ?></div>
        <h3>Holistic Development</h3>
        <p>Our curriculum nurtures well-rounded individuals grounded in their local context while
          globally competent, able to appreciate different cultures and perspectives.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true"><?= icon('teddy') ?></div>
        <h3>Preschool Montessori Approach</h3>
        <p>For our youngest learners, the Montessori method encourages curiosity, independence, and
          a love for learning from an early age, a strong foundation for future success.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true"><?= icon('graduation-cap') ?></div>
        <h3>Preparation for the Future</h3>
        <p>As students progress through the grades, they're better equipped to face varied teaching
          methodologies wherever their educational journey takes them next.</p>
      </article>
      <article class="card">
        <div class="card__icon" aria-hidden="true"><?= icon('flag') ?></div>
        <h3>Values and Ethics</h3>
        <p>Drawing from Ghana's rich cultural and ethical heritage, we instill a deep sense of
          community, respect for diversity, and commitment to societal wellbeing.</p>
      </article>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 780px;">
      <p class="eyebrow">Our Commitment</p>
      <h2>Non-Discrimination Policy</h2>
      <p>Wonder World International School admits students of any race, nationality, and ethnic
        group to all the rights and privileges, programs, and activities made available to
        students of the school. We do not discriminate on the basis of race, color, nationality,
        or ethnicity in the administration of our educational policies, admissions policies,
        athletics, or any other school-administered program.</p>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Ready to Enroll?</h2>
        <p>Start the admissions process and see the hybrid curriculum in action.</p>
        <div class="cta-panel__ctas">
          <a href="admissions.php" class="btn btn--primary">Start Admissions</a>
          <a href="academics.php" class="btn btn--outline">Back to Academics</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
