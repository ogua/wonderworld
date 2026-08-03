<?php
/**
 * Shared inner-page hero + breadcrumb. Expects before include:
 * $pageHeroTitle (string), $breadcrumbs (array of ['label'=>string, 'url'=>string|null]).
 * Optional: $pageHeroBg (image path for a faint background image).
 */
?>
<section class="page-hero">
  <?php if (!empty($pageHeroBg)): ?>
    <div class="page-hero__bg" style="background-image:url('<?= htmlspecialchars($pageHeroBg) ?>')"></div>
  <?php endif; ?>
  <div class="container page-hero__content">
    <h1><?= htmlspecialchars($pageHeroTitle) ?></h1>
    <ul class="page-hero__breadcrumb">
      <?php foreach ($breadcrumbs as $crumb): ?>
        <li>
          <?php if (!empty($crumb['url'])): ?>
            <a href="<?= htmlspecialchars($crumb['url']) ?>"><?= htmlspecialchars($crumb['label']) ?></a>
          <?php else: ?>
            <span aria-current="page"><?= htmlspecialchars($crumb['label']) ?></span>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
