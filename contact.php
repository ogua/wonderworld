<?php
require_once __DIR__ . '/db/db.php';

$pageTitle = 'Contact Us';
$pageDescription = 'Get in touch with Wonder World International School in Adjiriganor, East Legon, Accra. Call, WhatsApp, email, or send us a message directly.';
$canonicalPath = '/contact.php';
require 'partials/head.php';
require 'partials/nav.php';

$bookTourUrl = rtrim($schoolurl, '/') . '/book-tour/' . rawurlencode($uniqueid)
    . '?return_url=' . urlencode($siteUrl . '/contact.php');

$pageHeroTitle = 'Contact Us';
$pageHeroBg = 'asset/images/hero-campus-building.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Contact', 'url' => null],
];
require 'partials/page-hero.php';
?>

<main id="main-content">

  <section class="content-band">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">We'd Love to Hear From You</p>
        <h2>How Would You Like to Connect With Us?</h2>
        <p>Whether you are exploring educational opportunities for your child, seeking admissions
          information or simply wishing to learn more about Wonder World International School,
          our team is ready to assist you. We welcome enquiries from prospective families, current
          parents and members of the wider community.</p>
      </div>
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('chat') ?></div>
          <h3>General Enquiries</h3>
          <p>Learn more about our school, curriculum, programmes and learner experience.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('people') ?></div>
          <h3>Admissions Enquiries</h3>
          <p>Speak with our admissions team about entry requirements, year group placement and
            the admissions process.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('document') ?></div>
          <h3>Request an Admission Form</h3>
          <p>Request an admission application pack and begin your child's journey with WWIS.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('home') ?></div>
          <h3>Book a School Tour</h3>
          <p>Visit our campus, experience our learning environment and meet our leadership and
            admissions team.</p>
          <p><a class="btn btn--primary" href="<?= htmlspecialchars($bookTourUrl) ?>">Book &amp; Pay for a Tour</a></p>
          <p style="font-size: var(--text-sm); margin-top: var(--space-xs);">Prefer we call you back first?
            Use the form below and choose "Book a School Tour" instead.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('calendar') ?></div>
          <h3>Schedule an Admissions Consultation</h3>
          <p>Arrange a phone, virtual or in-person consultation to discuss your child's
            educational needs.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container split-panel">
      <div>
        <p class="eyebrow">Send Us a Message</p>
        <h2>We'd Love to Hear From You</h2>
        <form id="contact-form" class="form-grid" novalidate>
          <div class="form-grid form-grid--cols-2" style="gap: var(--space-md);">
            <div class="form-field">
              <label for="contact-name">Full Name</label>
              <input type="text" id="contact-name" name="name" required autocomplete="name">
            </div>
            <div class="form-field">
              <label for="contact-email">Email Address</label>
              <input type="email" id="contact-email" name="email" required autocomplete="email">
            </div>
          </div>
          <div class="form-field">
            <label for="contact-phone">Phone Number</label>
            <input type="tel" id="contact-phone" name="phone" autocomplete="tel">
          </div>
          <div class="form-field">
            <label for="contact-subject">I'm reaching out about</label>
            <select id="contact-subject" name="subject">
              <option value="General Enquiries">General Enquiries</option>
              <option value="Admissions Enquiries">Admissions Enquiries</option>
              <option value="Request an Admission Form">Request an Admission Form</option>
              <option value="Book a School Tour">Book a School Tour</option>
              <option value="Schedule an Admissions Consultation">Schedule an Admissions Consultation</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-field">
            <label for="contact-message">Message</label>
            <textarea id="contact-message" name="message" required></textarea>
          </div>
          <div class="hp-field" aria-hidden="true">
            <label for="contact-website">Leave this field empty</label>
            <input type="text" id="contact-website" name="website" tabindex="-1" autocomplete="off">
          </div>
          <button type="submit" class="btn btn--primary">Send Message</button>
          <p class="form-note" id="contact-note" role="status"></p>
        </form>
      </div>

      <div>
        <p class="eyebrow">Reach Us Directly</p>
        <h2>Contact Details</h2>
        <ul class="info-list">
          <li><strong>Address:</strong> Wonder World International School, Adjiriganor, East Legon
            (Father Odai Kwabina Street), GD-210-9384, Accra, Ghana</li>
          <li><strong>Call Us:</strong>
            <a href="tel:+233558230501">+233 55 823 0501</a> ·
            <a href="tel:+233240941560">+233 24 094 1560</a> ·
            <a href="tel:+233504685546">+233 50 468 5546</a>
          </li>
          <li><strong>Email:</strong> <a href="mailto:wonderworldintsch@gmail.com">wonderworldintsch@gmail.com</a></li>
          <li><strong>WhatsApp:</strong> <a href="https://api.whatsapp.com/send?phone=+233558230501&text=Hello" target="_blank" rel="noopener">+233 55 823 0501</a></li>
          <li><strong>Instagram:</strong> <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener">@wonderworldschoolgh</a></li>
          <li><strong>Office Hours:</strong> Monday – Friday, 8:00 a.m. – 4:00 p.m.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <iframe
        class="map-embed"
        title="Map to Wonder World International School"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15881.84280202441!2d-0.1439602!3d5.646285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf83afaba40299%3A0x72d30eb2b405e0ba!2sWonder%20World%20International%20School!5e0!3m2!1sen!2sgh!4v1688053305401!5m2!1sen!2sgh">
      </iframe>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
