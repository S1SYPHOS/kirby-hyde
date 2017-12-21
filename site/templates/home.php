<?php snippet('header') ?>

<div class="posts">
  <?php if($posts->count()) : ?>  
  <?php foreach ($posts as $post) : ?>
  <div class="post">
    <h1 class="post-title">
      <a href="<?= $post->url() ?>">
        <?= $post->title() ?>
      </a>
    </h1>

    <span class="post-date"><?= $post->date('d M Y') ?></span>

    <?= $post->text()->kt() ?>
  </div>
  <?php endforeach ?>
  <?php else : ?>
  <p>This blog does not contain any articles yet.</p>
  <?php endif ?>
</div>

<?php snippet('pagination') ?>

<?php snippet('footer') ?>

