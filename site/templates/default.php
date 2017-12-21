<?php snippet('header') ?>


<div class="page">
  <h1 class="page-title"><?= $page->title()->html() ?></h1>
  <?= $page->text()->kt() ?>
</div>

<?php snippet('footer') ?>