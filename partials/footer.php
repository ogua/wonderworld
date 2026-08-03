<footer class="site-footer">
  <div class="container site-footer__grid">
    <div>
      <img src="asset/images/logo-mark.png" alt="" width="72" style="margin-bottom: var(--space-md);">
      <h3>Wonder World International School</h3>
      <p style="color: var(--color-accent); font-weight: 700;">Integrity and Excellence · In God We Trust</p>
      <p>Adjiriganor, East Legon<br>(Father Odai Kwabina Street)<br>GD-210-9384, Accra, Ghana</p>
      <div class="site-footer__social">
        <a href="https://api.whatsapp.com/send?phone=+233558230501&text=Hello" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12c0 1.85.5 3.58 1.38 5.07L2 22l5.07-1.33C8.53 21.5 10.24 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.55 0-3-.42-4.24-1.14l-.3-.18-3 .79.8-2.93-.2-.31A7.94 7.94 0 0 1 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8-3.59 8-8 8z"/></svg>
        </a>
        <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener" aria-label="Wonder World on Instagram">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.69 4.92 4.92.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07s-3.58-.01-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85C2.38 3.92 3.9 2.38 7.15 2.23 8.42 2.17 8.8 2.16 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.7.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.2 4.35 2.63 6.78 6.98 6.98C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c4.35-.2 6.78-2.63 6.98-6.98.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95C23.73 2.7 21.3.27 16.95.07 15.67.01 15.26 0 12 0z"/><path d="M12 5.84A6.16 6.16 0 1 0 18.16 12 6.16 6.16 0 0 0 12 5.84zM12 16a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"/><circle cx="18.41" cy="5.59" r="1.44"/></svg>
        </a>
      </div>
    </div>

    <div>
      <h3>Quick Links</h3>
      <a class="site-footer__link" href="about.php">About the School</a>
      <a class="site-footer__link" href="hybrid-curriculum.php">Curriculum</a>
      <a class="site-footer__link" href="accreditation-licensing.php">Accreditation &amp; Licensing</a>
      <a class="site-footer__link" href="admissions.php">Admissions</a>
      <a class="site-footer__link" href="management-team.php">Leadership</a>
      <a class="site-footer__link" href="school-life.php">School Life</a>
      <a class="site-footer__link" href="safeguarding-policy.php">Safeguarding &amp; Learner Support</a>
      <a class="site-footer__link" href="parent-information.php">Parent Information</a>
      <a class="site-footer__link" href="contact.php">Contact Us</a>
    </div>

    <div>
      <h3>Get in Touch</h3>
      <a class="site-footer__link" href="mailto:wonderworldintsch@gmail.com">wonderworldintsch@gmail.com</a>
      <a class="site-footer__link" href="https://api.whatsapp.com/send?phone=+233558230501&text=Hello" target="_blank" rel="noopener">+233 55 823 0501</a>
      <a class="site-footer__link" href="news.php">News</a>
      <a class="site-footer__link" href="testimonials.php">Testimonials</a>
      <a class="site-footer__link" href="faqs.php">FAQs</a>
      <a class="site-footer__link" href="downloads.php">Downloads</a>
    </div>

    <div>
      <h3>Newsletter</h3>
      <p>Get admissions news and school updates in your inbox.</p>
      <form class="site-footer__form" id="newsletter-form" novalidate>
        <label for="newsletter-email" class="visually-hidden">Email address</label>
        <input type="email" id="newsletter-email" name="email" placeholder="Your email" required autocomplete="email">
        <div class="hp-field" aria-hidden="true">
          <label for="newsletter-website">Leave this field empty</label>
          <input type="text" id="newsletter-website" name="website" tabindex="-1" autocomplete="off">
        </div>
        <button type="submit" class="btn btn--primary">Sign Up</button>
      </form>
      <p class="site-footer__note" id="newsletter-note" role="status"></p>
    </div>
  </div>

  <div class="container site-footer__bottom">
    <p>&copy; <?= date('Y') ?> Wonder World International School. All rights reserved.</p>
    <p>
      <a href="privacy-policy.php">Privacy Policy</a> &nbsp;·&nbsp;
      <a href="terms-of-use.php">Terms of Use</a> &nbsp;·&nbsp;
      <a href="safeguarding-policy.php">Safeguarding &amp; Learner Support</a> &nbsp;·&nbsp;
      <a href="anti-bullying-policy.php">Anti-Bullying</a> &nbsp;·&nbsp;
      <a href="health-safety.php">Health &amp; Safety</a> &nbsp;·&nbsp;
      <a href="student-responsibility-dress-code.php">Dress Code</a>
    </p>
  </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
