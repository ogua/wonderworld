<?php
$pageTitle = 'News';
$pageDescription = 'The latest news from Wonder World International School.';
$canonicalPath = '/news.php';
require 'partials/head.php';
require 'partials/nav.php';

$pageHeroTitle = 'News';
$pageHeroBg = 'asset/images/hero-graduation.jpg';
$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'News', 'url' => null],
];
require 'partials/page-hero.php';

require_once __DIR__ . '/db/db.php';
$news = [];
if (!$conn->connect_error) {
    $stmt = $conn->prepare(
        "SELECT title, excerpt, cover_image, published_at FROM news_posts
         WHERE uniqueid = ? AND status = 'published' ORDER BY published_at DESC LIMIT 12"
    );
    if ($stmt) {
        $stmt->bind_param('s', $uniqueid);
        $stmt->execute();
        $news = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
    }
}
?>

<main id="main-content">

  <section class="content-band">
    <div class="container" style="<?= empty($news) ? 'max-width: 720px;' : '' ?>">
      <?php if (empty($news)): ?>
        <div class="empty-state" data-reveal>
          <div class="empty-state__icon" aria-hidden="true"><?= icon('newspaper') ?></div>
          <p>Our first news posts are coming soon. Check back here, follow
            <a href="https://www.instagram.com/wonderworldschoolgh/" target="_blank" rel="noopener">@wonderworldschoolgh</a>
            for real-time updates, or see what's already happened on our <a href="events.php">Events
            page</a>.</p>
        </div>
      <?php else: ?>
        <div class="card-grid" data-reveal>
          <?php foreach ($news as $post): ?>
            <article class="card" style="padding: 0; overflow: hidden;">
              <?php if (!empty($post['cover_image'])): ?>
                <img src="<?= htmlspecialchars(rtrim($schoolurl, '/') . '/storage/' . $post['cover_image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy" style="width:100%; aspect-ratio: 16/9; object-fit: cover;">
              <?php endif; ?>
              <div style="padding: var(--space-lg);">
                <?php if (!empty($post['published_at'])): ?>
                  <p class="eyebrow"><?= htmlspecialchars(date('d M Y', strtotime($post['published_at']))) ?></p>
                <?php endif; ?>
                <h3><?= htmlspecialchars($post['title']) ?></h3>
                <?php if (!empty($post['excerpt'])): ?>
                  <p><?= htmlspecialchars($post['excerpt']) ?></p>
                <?php endif; ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php require 'partials/footer.php'; ?>
