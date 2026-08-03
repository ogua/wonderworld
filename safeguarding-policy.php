<?php
/**
 * Deliberately not a fabricated procedural policy: CLAUDE.md flags that a formal
 * Safeguarding/Child Protection document needs to be confirmed/supplied by the school,
 * not invented by the implementer. This page states our real, general commitment and
 * points families to real related pages/contact, while being honest that the full
 * formal document is pending.
 */
$pageTitle = 'Safeguarding & Child Protection';
$pageDescription = "Wonder World International School's commitment to a safe, supportive learning environment: our learner support framework, inclusion approach, and how to report a safeguarding concern.";
$canonicalPath = '/safeguarding-policy.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Safeguarding & Child Protection';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Policies', 'url' => null],
    ['label' => 'Safeguarding', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container prose" style="max-width: 780px;">

      <h2>A Safe and Supportive Learning Environment</h2>
      <p>At Wonder World International School, the safety, wellbeing and dignity of every learner
        are our highest priorities. We are committed to creating a nurturing environment where
        learners feel safe, respected, included and confident to learn, grow and thrive.
        Safeguarding is embedded throughout school life and is the shared responsibility of every
        member of our school community.</p>

      <h2>Supporting Every Learner</h2>
      <p>WWIS provides a graduated approach to learner support that responds to individual
        strengths, needs and circumstances. Our support framework includes:</p>
      <ul>
        <li>High-quality learner-centred teaching</li>
        <li>Early identification of learning and wellbeing needs</li>
        <li>Inclusive teaching practices and reasonable adjustments</li>
        <li>Pastoral care and wellbeing support</li>
        <li>Individual learner support planning where appropriate</li>
        <li>Strong partnerships with families</li>
        <li>Collaboration with specialist professionals when additional support is required</li>
      </ul>

      <h2>Inclusion and Equity</h2>
      <p>Every learner deserves the opportunity to participate, succeed and flourish. WWIS
        embraces diversity and promotes equitable access to learning by recognising and responding
        to individual strengths, backgrounds, languages and learning needs while maintaining high
        expectations for every learner.</p>

      <h2>Positive Relationships and Wellbeing</h2>
      <p>Healthy relationships form the foundation of a successful learning community. The school
        promotes respectful behaviour, kindness, responsibility and restorative approaches that
        strengthen relationships and build a strong sense of belonging. Bullying, discrimination
        and unsafe behaviour are addressed promptly, fairly and consistently in accordance with
        school policy. See our <a href="anti-bullying-policy.php">Anti-Bullying Policy</a> and
        <a href="health-safety.php">Health &amp; Safety</a> pages, guided throughout by our values
        of Integrity, Respect and Service (see our
        <a href="vision-mission.php">Vision &amp; Mission page</a>).</p>

      <div class="empty-state" data-reveal>
        <div class="empty-state__icon" aria-hidden="true"><?= icon('shield') ?></div>
        <p>Our full, formal Safeguarding &amp; Child Protection Policy document is being
          finalized for publication here. If you'd like a copy now, or have a safeguarding concern
          to raise, please contact us directly. We take every report seriously and will respond
          promptly.</p>
      </div>

      <h2>Report a Concern</h2>
      <p>If you have a safeguarding concern about a child at WWIS, please contact the school
        directly and as soon as possible:</p>
      <ul>
        <li>Call or WhatsApp: <a href="tel:+233558230501">+233 55 823 0501</a></li>
        <li>Email: <a href="mailto:wonderworldintsch@gmail.com">wonderworldintsch@gmail.com</a></li>
      </ul>

    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Request the Full Policy</h2>
        <p>Get in touch and we'll share our complete Safeguarding &amp; Child Protection
          documentation.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
