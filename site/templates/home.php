<?php snippet('header') ?>

<div class="posts">
  <?php if($posts->count()) : ?>  
  <?php foreach ($posts as $post) : ?>
  <article class="post">
    <h1 class="post-title">
      <a href="<?= $post->url() ?>">
        <?= $post->title() ?>
      </a>
    </h1>

    <time datetime="<?= $post->date() ?>" class="post-date"><?= $post->date('d M Y') ?></time>

    <?= $post->text()->kt() ?>
  </article>
  <?php endforeach ?>
  <?php else : ?>
  <p>This blog does not contain any articles yet.</p>
  <?php endif ?>
</div>

<?php snippet('pagination') ?>

<?php snippet('footer') ?>