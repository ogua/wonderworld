<?php
$pageTitle = 'Admissions & Curricular Process';
$pageDescription = 'Enrolment ages, vacation breaks, extra-curricular activities, after-school and Saturday programs, open house, and school hours at Wonder World International School.';
$canonicalPath = '/admissions-curricular.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Admissions & Curricular Process';
$pageHeroBg = 'asset/images/why-choose-building.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Admissions', 'url' => 'admissions.php'],
    ['label' => 'Admissions & Curricular Process', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container prose" style="max-width: 780px;">
      <p class="eyebrow">Who We Admit</p>
      <h2>From Three Months to Grade 9</h2>
      <p>Our facility caters for early years starters (6 months up to 5 years) through
        preschoolers, and primary school from kindergarten up to Grade 9. Currently our physical
        school is still growing. Our classes go up to Grade 2, with room for expansion as more
        classes are added, a work in progress. We admit children from three months of age into our
        daycare and preschool.</p>
      <p>The academic year starts each January, but admissions are ongoing throughout the year. Our
        school term runs 14–16 weeks per quarter. We welcome students from every background who
        will add love, value, and rich culture to our community.</p>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Beyond the Classroom</p>
        <h2>Vacation Breaks, Summer School &amp; Care Options</h2>
      </div>
      <div class="card-grid" data-reveal>
        <article class="card">
          <h3>Vacation Breaks &amp; Summer School</h3>
          <p>2–3 week breaks within a term. Our school stays open for drop-off at an affordable
            fee for parents who need it, and we've helped many parents return to work or further
            their education with peace of mind.</p>
        </article>
        <article class="card">
          <h3>After-School Activities</h3>
          <p>Available weekly, Monday through Friday, between 17:00 and 19:00.</p>
        </article>
        <article class="card">
          <h3>Saturday School</h3>
          <p>Academic and social activities including swimming, Super Readers Club, homework
            help, and dance club, from 9am to 5pm.</p>
        </article>
        <article class="card">
          <h3>Open House</h3>
          <p>The school opens for viewing and staff interaction a week before every new term.
            Dates are shared via email and WhatsApp.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container split-panel">
      <div>
        <p class="eyebrow">Extra-Curricular Activities</p>
        <h2>Something Beyond Academics</h2>
        <ul class="checklist">
          <li>Abacus with BraiNest</li>
          <li>Brainzy Kids Club</li>
          <li>Ballet</li>
          <li>Tennis</li>
          <li>Swimming</li>
          <li>Super Readers Club (read before age 4)</li>
          <li>Talented Wonder Kidz</li>
          <li>Dance Club</li>
        </ul>
        <p>Students pay a participation fee for each activity in which they take part.</p>
      </div>
      <div>
        <p class="eyebrow">After-School Hour Rates</p>
        <h2>Flexible Care Pricing</h2>
        <ul class="checklist">
          <li>Daily: GHS 20/hr</li>
          <li>Weekly: GHS 150</li>
          <li>Monthly (4 weeks): GHS 600</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="content-band content-band--dark">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Daily Schedule</p>
        <h2>School Hours</h2>
      </div>
      <div class="stat-grid" data-reveal>
        <div class="arc-stat">
          <span class="arc-stat__value" style="font-size: 1.5rem;">8:00–2:00</span>
          <span class="arc-stat__label">School Hours</span>
        </div>
        <div class="arc-stat">
          <span class="arc-stat__value" style="font-size: 1.5rem;">2:00–3:00</span>
          <span class="arc-stat__label">Extra-Curricular</span>
        </div>
        <div class="arc-stat">
          <span class="arc-stat__value" style="font-size: 1.5rem;">3:00–5:00</span>
          <span class="arc-stat__label">Pick-Up Time</span>
        </div>
        <div class="arc-stat">
          <span class="arc-stat__value" style="font-size: 1.5rem;">3:00–7:00</span>
          <span class="arc-stat__label">After School</span>
        </div>
      </div>
    </div>
  </section>

  <section class="content-band">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Ready to Get Started?</h2>
        <p>See the full step-by-step admission process and required documents.</p>
        <div class="cta-panel__ctas">
          <a href="admission-requirements.php" class="btn btn--primary">Admission Requirements</a>
          <a href="contact.php" class="btn btn--outline">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
