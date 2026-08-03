<?php
/**
 * Sticky nav: transparent over the hero, solid white after scroll (toggled
 * by js/main.js adding `.site-nav--scrolled`). IA follows the client's
 * 10-section international-school standard (nav-structure.txt, 2026-07-29):
 * Home / About the School / Curriculum / Accreditation and Licensing /
 * Admissions / Leadership / School Life / Parent Information / Contact Us.
 * News and Testimonials are intentionally not in main nav per that standard:
 * they're linked from the homepage and footer instead. Safeguarding and
 * Learner Support moved out of main nav to the footer (2026-08-03, client
 * request) to make room for the Login link; still reachable there and from
 * the footer's legal-links row.
 */
?>
<header>
<nav class="site-nav" id="site-nav" aria-label="Primary">
  <div class="container site-nav__inner">
    <a href="index.php" class="site-nav__brand" aria-label="Wonder World International School home">
      <img src="asset/images/logo-mark.png" alt="Wonder World International School logo">
    </a>

    <ul class="site-nav__menu">
      <li><a class="site-nav__link" href="index.php">Home</a></li>

      <li class="site-nav__item--dropdown">
        <a class="site-nav__link" href="about.php" aria-haspopup="true">About ▾</a>
        <ul class="site-nav__dropdown">
          <li><a href="about.php">About Us</a></li>
          <li><a href="history.php">History</a></li>
          <li><a href="vision-mission.php">Vision &amp; Mission</a></li>
          <li><a href="principal-message.php">Principal's Message</a></li>
        </ul>
      </li>

      <li class="site-nav__item--dropdown">
        <a class="site-nav__link" href="academics.php" aria-haspopup="true">Curriculum ▾</a>
        <ul class="site-nav__dropdown">
          <li><a href="academics.php">Academics</a></li>
          <li><a href="hybrid-curriculum.php">WWIS Values-Based Hybrid Curriculum</a></li>
        </ul>
      </li>

      <li><a class="site-nav__link" href="accreditation-licensing.php">Accreditation</a></li>

      <li class="site-nav__item--dropdown">
        <a class="site-nav__link" href="admissions.php" aria-haspopup="true">Admissions ▾</a>
        <ul class="site-nav__dropdown">
          <li><a href="admissions.php">Admissions</a></li>
          <li><a href="admission-requirements.php">Admission Requirements</a></li>
          <li><a href="admissions-curricular.php">Admissions &amp; Curricular Process</a></li>
        </ul>
      </li>

      <li class="site-nav__item--dropdown">
        <a class="site-nav__link" href="management-team.php" aria-haspopup="true">Leadership ▾</a>
        <ul class="site-nav__dropdown">
          <li><a href="management-team.php">Leadership</a></li>
          <li><a href="teachers.php">Teachers</a></li>
        </ul>
      </li>

      <li class="site-nav__item--dropdown">
        <a class="site-nav__link" href="school-life.php" aria-haspopup="true">School Life ▾</a>
        <ul class="site-nav__dropdown">
          <li><a href="school-life.php">School Life</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="facilities.php">Facilities</a></li>
        </ul>
      </li>

      <li class="site-nav__item--dropdown">
        <a class="site-nav__link" href="parent-information.php" aria-haspopup="true">Parents ▾</a>
        <ul class="site-nav__dropdown">
          <li><a href="parent-information.php">Parent Information</a></li>
          <li><a href="downloads.php">Downloads</a></li>
          <li><a href="faqs.php">FAQs</a></li>
        </ul>
      </li>

      <li><a class="site-nav__link" href="contact.php">Contact</a></li>
      <li><a class="site-nav__login" href="https://app.wonderworldinternationalschool.com" target="_blank" rel="noopener">Login</a></li>
    </ul>

    <button class="site-nav__toggle" id="site-nav-toggle" aria-expanded="false" aria-controls="site-nav-mobile">
      <span class="visually-hidden">Toggle menu</span>
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
    </button>
  </div>

  <div class="container">
    <div class="site-nav__mobile" id="site-nav-mobile">
      <a href="index.php">Home</a>

      <span class="site-nav__mobile-group-label">About the School</span>
      <a href="about.php">About Us</a>
      <a href="history.php">History</a>
      <a href="vision-mission.php">Vision &amp; Mission</a>
      <a href="principal-message.php">Principal's Message</a>

      <span class="site-nav__mobile-group-label">Curriculum</span>
      <a href="academics.php">Academics</a>
      <a href="hybrid-curriculum.php">WWIS Values-Based Hybrid Curriculum</a>

      <span class="site-nav__mobile-group-label">&nbsp;</span>
      <a href="accreditation-licensing.php">Accreditation &amp; Licensing</a>

      <span class="site-nav__mobile-group-label">Admissions</span>
      <a href="admissions.php">Admissions</a>
      <a href="admission-requirements.php">Admission Requirements</a>
      <a href="admissions-curricular.php">Admissions &amp; Curricular Process</a>

      <span class="site-nav__mobile-group-label">Leadership</span>
      <a href="management-team.php">Leadership</a>
      <a href="teachers.php">Teachers</a>

      <span class="site-nav__mobile-group-label">School Life</span>
      <a href="school-life.php">School Life</a>
      <a href="gallery.php">Gallery</a>
      <a href="events.php">Events</a>
      <a href="facilities.php">Facilities</a>

      <span class="site-nav__mobile-group-label">Parent Information</span>
      <a href="parent-information.php">Parent Information</a>
      <a href="downloads.php">Downloads</a>
      <a href="faqs.php">FAQs</a>

      <span class="site-nav__mobile-group-label">&nbsp;</span>
      <a href="contact.php">Contact Us</a>
      <a class="site-nav__login" href="https://app.wonderworldinternationalschool.com" target="_blank" rel="noopener">Login</a>
    </div>
  </div>
</nav>
</header>
