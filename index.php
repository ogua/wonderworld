<?php
$pageTitle = 'Home';
$pageDescription = 'Wonder World International School (WWIS): a values-based international school in Adjiriganor, East Legon, Accra, combining the WWIS Values-Based Hybrid Curriculum with the Oxford International Curriculum (OIC). A journey of excellence and integrity since 2017.';
$canonicalPath = '/';
$isHome = true;
$pageStylesheet = 'css/home.css';
require 'partials/head.php';
require 'partials/nav.php';
?>

<main id="main-content">

  <!-- Hero -->
  <section class="home-hero">
    <div class="home-hero__slide is-active">
      <div class="home-hero__slide-bg" style="background-image:url('asset/images/hero-campus-building.jpg')"></div>
      <p class="home-hero__caption">Our East Legon campus: students gathered on the school grounds</p>
    </div>
    <div class="home-hero__slide">
      <div class="home-hero__slide-bg" style="background-image:url('asset/images/hero-human-chain.jpg')"></div>
      <p class="home-hero__caption">Our students, hand in hand: the spirit of the WWIS community</p>
    </div>
    <div class="home-hero__slide">
      <div class="home-hero__slide-bg" style="background-image:url('asset/images/hero-primary-campus.jpg')"></div>
      <p class="home-hero__caption">Our growing Primary Department campus</p>
    </div>
    <div class="home-hero__overlay"></div>

    <div class="container home-hero__content">
      <p class="eyebrow home-hero__eyebrow">Wonder World International School</p>
      <h1>A Journey of Excellence and Integrity</h1>
      <p class="home-hero__lead">A values-based international school in Adjiriganor, East Legon,
        combining the WWIS Values-Based Hybrid Curriculum with the Oxford International Curriculum
        (OIC), nurturing principled, globally-minded learners since 2017.</p>
      <div class="home-hero__ctas">
        <a href="admissions.php" class="btn btn--primary">Start Admissions</a>
        <a href="contact.php" class="btn btn--outline">Contact Us</a>
      </div>
    </div>

    <div class="home-hero__dots">
      <button class="home-hero__dot is-active" aria-label="Show slide 1"><span class="home-hero__dot-fill"></span></button>
      <button class="home-hero__dot" aria-label="Show slide 2"><span class="home-hero__dot-fill"></span></button>
      <button class="home-hero__dot" aria-label="Show slide 3"><span class="home-hero__dot-fill"></span></button>
    </div>

    <svg class="home-hero__arc" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,60 L0,20 Q720,-40 1440,20 L1440,60 Z" fill="currentColor"></path>
    </svg>
  </section>

  <!-- Welcome -->
  <section class="content-band content-band--mist">
    <div class="container" style="max-width: 820px; text-align:center; margin-inline:auto;" data-reveal>
      <p class="eyebrow">Welcome to WWIS</p>
      <h2>Excellence, Character and Wellbeing, Together</h2>
      <p>Welcome to Wonder World International School (WWIS), a values-based international school
        in Adjiriganor, East Legon, Accra, where academic excellence, character development and
        learner wellbeing come together to prepare young people for success in an ever-changing
        world. Our educational approach combines the WWIS Values-Based Hybrid Curriculum with the
        learner-centred philosophy of the Oxford International Curriculum (OIC) to provide
        engaging, inclusive and internationally relevant learning experiences.</p>
      <p>Learning at WWIS extends beyond academic achievement. We intentionally nurture critical
        thinking, creativity, collaboration, communication, leadership and responsible citizenship
        while cultivating integrity, resilience and a lifelong love of learning, within a safe,
        inclusive and supportive environment where every learner is known, valued, respected and
        encouraged to flourish.</p>
    </div>
  </section>

  <!-- About / Principal -->
  <section class="content-band">
    <div class="container home-about__grid" data-reveal>
      <div class="home-about__media">
        <div class="arc-frame">
          <span class="arc-frame__ring" aria-hidden="true"></span>
          <img src="asset/images/principal-jalia-dekyi.jpg" alt="Mrs. Jalia Dekyi, Principal of Wonder World International School" loading="lazy">
        </div>
        <div class="portrait-caption">
          <strong>Mrs. Jalia Dekyi</strong>
          <span>Principal</span>
        </div>
      </div>
      <div>
        <p class="eyebrow">Our Story</p>
        <h2>From a Summer Camp to a Global-Minded School</h2>
        <p>Wonder World started in July 2017 as a summer camp, a place for students to stay engaged
          and inspired over the long break. What began with a handful of students from schools across
          Accra grew, by October 2017, into a full daycare, and then into Wonder World International
          School as we know it today.</p>
        <p>When the Covid-19 pandemic hit, we didn't pause. We launched an online school that reached
          students as far as Nigeria and the United Kingdom within weeks. Every stage of that growth
          shaped how we care for children today: a safe, joyful, and genuinely global learning
          environment.</p>
        <a href="history.php" class="btn btn--ghost">Read our full story →</a>
        <hr style="border: none; border-top: 1px solid var(--color-border); margin: var(--space-lg) 0;">
        <p><em>"I invite each one of you to become an active participant in this remarkable journey.
          Let us work hand in hand, believing in the transformative power of education."</em></p>
        <a href="principal-message.php" class="btn btn--ghost">Read the Principal's full welcome →</a>
      </div>
    </div>
  </section>

  <!-- Mission / Vision / Core Values -->
  <section class="content-band content-band--mist">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">What Drives Us</p>
        <h2>Mission, Vision &amp; Core Values</h2>
      </div>

      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('target') ?></div>
          <h3>Our Mission</h3>
          <p>To provide transformative education that develops academic success, critical thinking,
            problem-solving, leadership and integrity through engaging, learner-centred educational
            experiences.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('globe') ?></div>
          <h3>Our Vision</h3>
          <p>To empower learners to excel academically and holistically, locally and globally, while
            nurturing leaders grounded in integrity, valuing excellence and dedicated to making a
            positive impact.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('star') ?></div>
          <h3>Global Leadership</h3>
          <p>Developing leadership skills adaptable to diverse cultural and international contexts,
            vital in today's interconnected world.</p>
        </article>
      </div>

      <div class="home-values__more-grid" id="values-more">
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('people') ?></div>
          <h3>Respect</h3>
          <p>Treating every perspective with empathy and openness, the foundation of a positive,
            supportive community.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('trophy') ?></div>
          <h3>Excellence</h3>
          <p>Continuously striving for the highest achievable standards, promoting a growth mindset in
            every learner.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('compass') ?></div>
          <h3>Accountability</h3>
          <p>Taking responsibility for one's actions and fulfilling obligations diligently and
            ethically.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('puzzle') ?></div>
          <h3>Teamwork</h3>
          <p>Collaborative effort that values diversity in pursuit of shared goals, essential to
            solving complex problems.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('lightbulb') ?></div>
          <h3>Wonder</h3>
          <p>Approaching learning with curiosity and enquiry, the starting point for genuine,
            lasting understanding.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('book') ?></div>
          <h3>Wisdom</h3>
          <p>Applying knowledge thoughtfully, turning what's learned into sound, considered
            decisions.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('link') ?></div>
          <h3>Integrity</h3>
          <p>Adhering to ethical principles and honesty in all actions, the bedrock of trust and
            moral character.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('heart') ?></div>
          <h3>Service</h3>
          <p>Contributing positively to society, developing empathy and a strong sense of social
            responsibility.</p>
        </article>
      </div>
      <button class="home-values__toggle" id="values-toggle" aria-expanded="false">See all 9 core values</button>

      <div style="text-align:center; max-width: 720px; margin: var(--space-2xl) auto 0;" data-reveal>
        <p class="eyebrow">Our Educational Philosophy</p>
        <h2>Active, Purposeful and Learner-Centred</h2>
        <p>At WWIS, learners are active participants in their own learning. Teaching encourages
          curiosity, enquiry, reflection and collaboration while developing the knowledge, skills
          and dispositions needed for lifelong success. Our approach promotes:</p>
      </div>
      <ul class="checklist" style="max-width: 720px; margin: var(--space-md) auto 0; columns: 2; column-gap: var(--space-xl);" data-reveal>
        <li>Active and purposeful learning</li>
        <li>Critical and creative thinking</li>
        <li>Effective communication and collaboration</li>
        <li>Character and leadership development</li>
        <li>Wellbeing and healthy relationships</li>
        <li>Global awareness and responsible citizenship</li>
        <li>Continuous personal growth</li>
      </ul>
      <div style="text-align:center; margin-top: var(--space-lg);">
        <a href="about.php" class="btn btn--ghost">More on Our Philosophy →</a>
      </div>
    </div>
  </section>

  <!-- Programs -->
  <section class="content-band">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Programs Offered</p>
        <h2>Something for Every Stage of Learning</h2>
      </div>
      <div class="card-grid" data-reveal>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('home') ?></div>
          <h3>Regular Admission</h3>
          <p>Our core academic program, built on the WWIS hybrid curriculum.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('sun') ?></div>
          <h3>Summer School</h3>
          <p>The program WWIS was born from: fun, interactive learning over the long break.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('laptop') ?></div>
          <h3>Online School</h3>
          <p>A global classroom for students not yet fully transitioned to in-person learning.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('backpack') ?></div>
          <h3>After School Club</h3>
          <p>Safe, engaging care and activities once the academic day ends.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('calendar') ?></div>
          <h3>Saturday Care</h3>
          <p>Weekend care for families who need it, without compromising on quality.</p>
        </article>
        <article class="card">
          <div class="card__icon" aria-hidden="true"><?= icon('palette') ?></div>
          <h3>Extra-Curricular Activities</h3>
          <p>Super Readers Club, Swimming, Tennis, Ballet, and Abacus with BraiNest.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Why choose us / Hybrid curriculum -->
  <section class="content-band content-band--mist">
    <div class="container split-panel" data-reveal>
      <div class="split-panel__media">
        <img src="asset/images/why-choose-building.jpg" alt="Aerial view of the Wonder World International School campus building" loading="lazy">
      </div>
      <div>
        <p class="eyebrow">Why Choose WWIS</p>
        <h2>A Values-Based Hybrid Curriculum, Built for Global Learners</h2>
        <p>We've pioneered the WWIS Values-Based Hybrid Curriculum, combining the strengths of the
          Ghanaian, British and American educational systems with the Oxford International
          Curriculum (OIC) and the Montessori approach for our preschoolers, empowering students
          to excel academically while leading with integrity in a globalised world.</p>
        <ul class="checklist">
          <li>Multicultural approach across three national curricula, plus OIC</li>
          <li>Montessori-led learning for our youngest students</li>
          <li>An online-learning infrastructure built during Covid-19, reaching students abroad</li>
          <li>A values-based foundation guided by all 9 of our core values</li>
        </ul>
        <a href="hybrid-curriculum.php" class="btn btn--primary">Explore Our Curriculum</a>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="content-band content-band--dark">
    <div class="container">
      <div class="stat-grid" data-reveal>
        <div class="arc-stat">
          <svg class="arc-stat__svg" viewBox="0 0 90 45" aria-hidden="true"><path d="M5,45 A40,40 0 0 1 85,45" fill="none" stroke="currentColor" stroke-width="6" stroke-linecap="round" style="color: var(--color-accent); opacity:0.35"/></svg>
          <span class="arc-stat__value">2017</span>
          <span class="arc-stat__label">Founded</span>
        </div>
        <div class="arc-stat">
          <svg class="arc-stat__svg" viewBox="0 0 90 45" aria-hidden="true"><path d="M5,45 A40,40 0 0 1 85,45" fill="none" stroke="currentColor" stroke-width="6" stroke-linecap="round" style="color: var(--color-accent); opacity:0.35"/></svg>
          <span class="arc-stat__value">6</span>
          <span class="arc-stat__label">Programs Offered</span>
        </div>
        <div class="arc-stat">
          <svg class="arc-stat__svg" viewBox="0 0 90 45" aria-hidden="true"><path d="M5,45 A40,40 0 0 1 85,45" fill="none" stroke="currentColor" stroke-width="6" stroke-linecap="round" style="color: var(--color-accent); opacity:0.35"/></svg>
          <span class="arc-stat__value">3+1</span>
          <span class="arc-stat__label">Curricula Blended, Plus Montessori</span>
        </div>
        <div class="arc-stat">
          <svg class="arc-stat__svg" viewBox="0 0 90 45" aria-hidden="true"><path d="M5,45 A40,40 0 0 1 85,45" fill="none" stroke="currentColor" stroke-width="6" stroke-linecap="round" style="color: var(--color-accent); opacity:0.35"/></svg>
          <span class="arc-stat__value">Accra</span>
          <span class="arc-stat__label">East Legon, Ghana</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery preview -->
  <section class="content-band">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Life at WWIS</p>
        <h2>Moments From Our Community</h2>
      </div>
      <div class="home-gallery__grid" data-reveal>
        <div class="home-gallery__item">
          <img src="asset/images/hero-excursion.jpg" alt="Students on an excursion to a plant nursery" loading="lazy">
        </div>
        <div class="home-gallery__item">
          <img src="asset/images/hero-playcentre.jpg" alt="A joyful field trip to an indoor adventure centre" loading="lazy">
        </div>
        <div class="home-gallery__item">
          <img src="asset/images/gallery-human-chain-2.jpg" alt="Students forming a long hand-in-hand chain across the school courtyard, seen from above" loading="lazy">
        </div>
        <div class="home-gallery__item">
          <img src="asset/images/hero-graduation.jpg" alt="A family celebrating graduation day at WWIS" loading="lazy">
        </div>
      </div>
      <div class="home-gallery__cta">
        <a href="gallery.php" class="btn btn--ghost">View the full gallery →</a>
      </div>
    </div>
  </section>

  <!-- Featured video -->
  <section class="content-band content-band--mist">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Take a Look Inside</p>
        <h2>Featured Video</h2>
      </div>
      <div class="home-video__wrap" data-reveal>
        <video id="featured-video" poster="asset/images/video-poster.jpg" preload="none" playsinline>
          <source src="asset/video/wonder-world.mp4" type="video/mp4">
        </video>
        <button class="home-video__play" id="video-play" aria-label="Play video: Welcome to Wonder World International School">
          <span class="home-video__play-icon" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
          </span>
        </button>
      </div>
    </div>
  </section>

  <!-- Testimonials / Events / News -->
  <section class="content-band">
    <div class="container">
      <div class="card-grid">
        <div data-reveal>
          <p class="eyebrow">Testimonials</p>
          <h3>What Our Families Say</h3>
          <div class="empty-state">
            <div class="empty-state__icon" aria-hidden="true"><?= icon('chat') ?></div>
            <p>Parent and student stories are on their way. In the meantime, follow us
              <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener">@wonderworldschoolgh</a>
              for a real look at life at WWIS.</p>
          </div>
        </div>
        <div data-reveal>
          <p class="eyebrow">Events</p>
          <h3>Recent &amp; Upcoming Events</h3>
          <p>Sports day, graduation, karate grading and seasonal celebrations: see what's
            happened, and reach out directly for upcoming term dates.</p>
          <a href="events.php" class="btn btn--ghost">View Events →</a>
        </div>
        <div data-reveal>
          <p class="eyebrow">News</p>
          <h3>Latest News</h3>
          <div class="empty-state">
            <div class="empty-state__icon" aria-hidden="true"><?= icon('newspaper') ?></div>
            <p>Our first news posts are coming soon. Check back, or follow our Instagram for
              real-time updates.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ + CTA -->
  <section class="content-band content-band--mist">
    <div class="container home-faq__grid">
      <div data-reveal>
        <p class="eyebrow">Frequently Asked Questions</p>
        <h2>Good to Know</h2>

        <div class="accordion">
          <div class="accordion__item">
            <h3 style="margin:0;">
              <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-1">
                What curriculum does WWIS follow?
                <span class="accordion__icon" aria-hidden="true">+</span>
              </button>
            </h3>
            <div class="accordion__panel" id="faq-1" data-open="false">
              <div class="accordion__panel-inner">
                <p>The WWIS Values-Based Hybrid Curriculum blends the Ghanaian, British and
                  American educational systems with the Oxford International Curriculum (OIC) and
                  a Montessori approach for our preschoolers.</p>
              </div>
            </div>
          </div>

          <div class="accordion__item">
            <h3 style="margin:0;">
              <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-2">
                What programs do you offer?
                <span class="accordion__icon" aria-hidden="true">+</span>
              </button>
            </h3>
            <div class="accordion__panel" id="faq-2" data-open="false">
              <div class="accordion__panel-inner">
                <p>Regular Admission, Summer School, Online School, After School Club, Saturday
                  Care, and Extra-Curricular Activities including Super Readers Club, Swimming,
                  Tennis, Ballet, and Abacus with BraiNest.</p>
              </div>
            </div>
          </div>

          <div class="accordion__item">
            <h3 style="margin:0;">
              <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-3">
                How do I start the admissions process?
                <span class="accordion__icon" aria-hidden="true">+</span>
              </button>
            </h3>
            <div class="accordion__panel" id="faq-3" data-open="false">
              <div class="accordion__panel-inner">
                <p>Reach out via our <a href="contact.php">Contact page</a> or WhatsApp, and our
                  admissions team will walk you through the Preliminary Inquiry form and next
                  steps.</p>
              </div>
            </div>
          </div>

          <div class="accordion__item">
            <h3 style="margin:0;">
              <button class="accordion__trigger" aria-expanded="false" aria-controls="faq-4">
                Where is the school located?
                <span class="accordion__icon" aria-hidden="true">+</span>
              </button>
            </h3>
            <div class="accordion__panel" id="faq-4" data-open="false">
              <div class="accordion__panel-inner">
                <p>Adjiriganor, East Legon (Father Odai Kwabina Street), GD-210-9384, Accra,
                  Ghana.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="cta-panel" data-reveal>
        <h2>Ready to Join the WWIS Family?</h2>
        <p>Start your child's journey of excellence and integrity today.</p>
        <div class="cta-panel__ctas">
          <a href="admissions.php" class="btn btn--primary">Start Admissions</a>
          <a href="contact.php" class="btn btn--outline">Contact Us</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Map + contact -->
  <section class="content-band">
    <div class="container home-contact__grid">
      <iframe
        class="map-embed"
        title="Map to Wonder World International School"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15881.84280202441!2d-0.1439602!3d5.646285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf83afaba40299%3A0x72d30eb2b405e0ba!2sWonder%20World%20International%20School!5e0!3m2!1sen!2sgh!4v1688053305401!5m2!1sen!2sgh">
      </iframe>
      <div data-reveal>
        <p class="eyebrow">Get in Touch</p>
        <h2>Visit or Contact Us</h2>
        <ul class="info-list">
          <li><strong>Address:</strong> Adjiriganor, East Legon (Father Odai Kwabina Street), GD-210-9384, Accra, Ghana</li>
          <li><strong>Phone / WhatsApp:</strong> <a href="https://api.whatsapp.com/send?phone=+233558230501&text=Hello" target="_blank" rel="noopener">+233 55 823 0501</a></li>
          <li><strong>Email:</strong> <a href="mailto:wonderworldintsch@gmail.com">wonderworldintsch@gmail.com</a></li>
          <li><strong>Instagram:</strong> <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener">@wonderworldschoolgh</a></li>
        </ul>
        <a href="contact.php" class="btn btn--primary" style="margin-top: var(--space-md);">Full Contact Page</a>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
