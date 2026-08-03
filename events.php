<?php
$pageTitle = 'Events';
$pageDescription = 'Recent events at Wonder World International School: sports day, graduation, karate grading, and seasonal celebrations, plus how to stay up to date on what\'s next.';
$canonicalPath = '/events.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'Events';
$pageHeroBg = 'asset/images/gallery-sports-day.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'School Life', 'url' => 'school-life.php'],
    ['label' => 'Events', 'url' => null],
];
require 'partials/page-hero.php';

/**
 * Past events now come from the admin portal's school_events table (posted
 * by Front Desk staff), not a hardcoded array. Unlike the old hardcoded
 * list, which deliberately hid dates because they were only guessed from
 * photo file timestamps, event_date here is real, staff-entered data, so
 * it's safe to display.
 */
require_once __DIR__ . '/db/db.php';
$events = [];
if (!$conn->connect_error) {
    $stmt = $conn->prepare(
        "SELECT title, description, event_date, location, cover_image, tag FROM school_events
         WHERE uniqueid = ? AND status = 'published' ORDER BY event_date DESC LIMIT 12"
    );
    if ($stmt) {
        $stmt->bind_param('s', $uniqueid);
        $stmt->execute();
        $events = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
    }
}
?>

<main id="main-content">

  <section class="content-band">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Recent Events</p>
        <h2>Moments From Our School Calendar</h2>
      </div>
      <?php if (empty($events)): ?>
        <div class="empty-state" data-reveal>
          <div class="empty-state__icon" aria-hidden="true"><?= icon('calendar') ?></div>
          <p>Event photos and recaps are added here after each school event. Follow
            <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener">@wonderworldschoolgh</a>
            for real-time updates in the meantime.</p>
        </div>
      <?php else: ?>
        <div class="card-grid" data-reveal>
          <?php foreach ($events as $event): ?>
            <article class="card" style="padding: 0; overflow: hidden;">
              <?php if (!empty($event['cover_image'])): ?>
                <img src="<?= htmlspecialchars(rtrim($schoolurl, '/') . '/storage/' . $event['cover_image']) ?>" alt="<?= htmlspecialchars($event['title']) ?>" loading="lazy" style="width:100%; aspect-ratio: 4/3; object-fit: cover;">
              <?php endif; ?>
              <div style="padding: var(--space-lg);">
                <p class="eyebrow">
                  <?php if (!empty($event['tag'])): ?><?= htmlspecialchars($event['tag']) ?><?php endif; ?>
                  <?php if (!empty($event['event_date'])): ?>
                    <?= !empty($event['tag']) ? ' · ' : '' ?><?= htmlspecialchars(date('d M Y', strtotime($event['event_date']))) ?>
                  <?php endif; ?>
                </p>
                <h3><?= htmlspecialchars($event['title']) ?></h3>
                <?php if (!empty($event['description'])): ?>
                  <p><?= htmlspecialchars($event['description']) ?></p>
                <?php endif; ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="content-band content-band--mist">
    <div class="container">
      <div style="text-align:center; max-width: 720px; margin-inline: auto;" data-reveal>
        <p class="eyebrow">Upcoming Events</p>
        <h2>What's Next</h2>
      </div>
      <div class="empty-state" data-reveal>
        <div class="empty-state__icon" aria-hidden="true"><?= icon('calendar') ?></div>
        <p>Our upcoming events calendar goes live here soon. For current term dates and the next
          school event, reach out directly via
          <a href="contact.php">Contact</a> or
          <a href="https://api.whatsapp.com/send?phone=+233558230501&text=Hello" target="_blank" rel="noopener">WhatsApp</a>,
          or follow <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener">@wonderworldschoolgh</a>
          for real-time updates.</p>
      </div>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
