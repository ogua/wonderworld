<?php
$pageTitle = 'Testimonials';
$pageDescription = 'What parents and students say about Wonder World International School.';
$canonicalPath = '/testimonials.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Testimonials';
$pageHeroBg = 'asset/images/gallery-fathers-day.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Testimonials', 'url' => null],
];
require 'partials/page-hero.php';

/**
 * Testimonials are now posted by Front Desk staff in the admin portal
 * (site_testimonials table) instead of hardcoded placeholder quotes. If
 * none are published yet, the page shows an honest empty state below
 * rather than fabricated filler: see the "no testimonials yet" branch.
 */
require_once __DIR__ . '/db/db.php';
$testimonials = [];
if (!$conn->connect_error) {
    $stmt = $conn->prepare(
        "SELECT name, role, category, quote, rating FROM site_testimonials
         WHERE uniqueid = ? AND status = 'published' ORDER BY created_at DESC LIMIT 40"
    );
    if ($stmt) {
        $stmt->bind_param('s', $uniqueid);
        $stmt->execute();
        foreach ($stmt->get_result()->fetch_all(MYSQLI_ASSOC) as $row) {
            $testimonials[] = [
                'cat' => $row['category'],
                'name' => $row['name'],
                'role' => $row['role'],
                'quote' => $row['quote'],
                'rating' => $row['rating'],
            ];
        }
        $stmt->close();
    }
}

$filters = [
    'all' => 'All',
    'parents' => 'Parents',
    'students' => 'Students',
    'alumni' => 'Alumni',
    'staff' => 'Staff',
];
?>

<main id="main-content">

  <section class="content-band">
    <div class="container">

      <?php if (empty($testimonials)): ?>
        <div class="empty-state" data-reveal>
          <div class="empty-state__icon" aria-hidden="true"><?= icon('chat') ?></div>
          <p>Real testimonials from our parents, students, alumni and staff are coming soon. Have a
            WWIS story to share? <a href="contact.php">Send it our way</a>.</p>
        </div>
      <?php else: ?>
        <div class="testimonial-filters" role="group" aria-label="Filter testimonials by group">
          <?php foreach ($filters as $key => $label): ?>
            <button type="button" class="testimonial-filters__btn<?= $key === 'all' ? ' is-active' : '' ?>" data-filter="<?= $key ?>" aria-pressed="<?= $key === 'all' ? 'true' : 'false' ?>"><?= htmlspecialchars($label) ?></button>
          <?php endforeach; ?>
        </div>

        <div class="testimonial-slider" data-reveal>
          <div class="testimonial-slider__track" id="testimonial-track" tabindex="0" role="region" aria-label="Testimonials, scrollable">
            <?php foreach ($testimonials as $t): ?>
              <article class="testimonial-card" data-category="<?= $t['cat'] ?>">
                <?php if (!empty($t['rating'])): ?>
                  <div class="testimonial-card__rating" aria-label="<?= (int) $t['rating'] ?> out of 5 stars">
                    <?php for ($i = 0; $i < (int) $t['rating']; $i++): ?><?= icon('star') ?><?php endfor; ?>
                  </div>
                <?php endif; ?>
                <p class="testimonial-card__quote">&ldquo;<?= htmlspecialchars($t['quote']) ?>&rdquo;</p>
                <div class="testimonial-card__footer">
                  <div class="testimonial-card__avatar"><?= icon('person') ?></div>
                  <div>
                    <span class="testimonial-card__name"><?= htmlspecialchars($t['name']) ?></span>
                    <span class="testimonial-card__role"><?= htmlspecialchars($t['role']) ?></span>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
          <div class="testimonial-slider__nav">
            <button type="button" class="testimonial-slider__arrow" id="testimonial-prev" aria-label="Previous testimonials"><?= icon('chevron-left') ?></button>
            <button type="button" class="testimonial-slider__arrow" id="testimonial-next" aria-label="Next testimonials"><?= icon('chevron-right') ?></button>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div class="cta-panel" data-reveal>
        <h2>Have a WWIS Story to Share?</h2>
        <p>We'd love to hear from you, parent, student, or alum. Real stories from our
          community are what belong on this page, not filler text.</p>
        <div class="cta-panel__ctas">
          <a href="contact.php" class="btn btn--primary">Share Your Story</a>
          <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener" class="btn btn--ghost">Follow on Instagram</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
