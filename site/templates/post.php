<?php snippet('header') ?>

<article class="post">
  <h1 class="post-title"><?= $page->title() ?></h1>
  <time datetime="<?= $page->date() ?>" class="post-date"><?= $page->date('d M Y') ?></time>
  <?= $page->text()->kt() ?>
</article>

<?php if($page->related()->isNotEmpty()) : ?>
<aside class="related">
  <h3>Related Posts</h3>
  <ul class="related-posts">
    <?php foreach($page->related()->toStructure() as $related) : ?>

    <?php
      $uri = $related->post()->value();
      $post = $page->siblings(false)->find($uri);
    ?>

    <li>
      <a href="<?= $post->url() ?>">
        <?= $post->title() ?>
        <small><time datetime="<?= $post->date() ?>"><?= $post->date('d M Y') ?></time></small>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</aside>
<?php endif ?>

<?php snippet('footer') ?>