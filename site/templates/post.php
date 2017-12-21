<?php snippet('header') ?>

<div class="post">
  <h1 class="post-title"><?= $page->title()->html() ?></h1>
  <span class="post-date"><?= $page->date('d M Y') ?></span>
  <?= $page->text()->kt() ?>
</div>

<?php if($page->related()->isNotEmpty()) : ?>
<div class="related">
  <h2>Related Posts</h2>
  <ul class="related-posts">
    <?php foreach($page->related()->toStructure() as $related) : ?>

    <?php
      $uri = $related->post()->value();
      $post = $page->siblings(false)->find($uri);
    ?>

    <li>
      <h3>
        <a href="<?= $post->url() ?>">
          <?= $post->title()->html() ?>
          <small><?= $post->date('d M Y') ?></small>
        </a>
      </h3>
    </li>
    <?php endforeach ?>
  </ul>
</div>
<?php endif ?>

<?php snippet('footer') ?>