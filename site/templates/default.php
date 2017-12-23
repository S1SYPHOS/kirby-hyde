<?php snippet('header') ?>

<article class="page">
  <h1 class="page-title"><?= $page->title() ?></h1>
  <?= $page->text()->kt() ?>
</article>

<?php snippet('footer') ?>