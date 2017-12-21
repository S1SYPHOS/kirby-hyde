<div class="sidebar">
  <div class="container sidebar-sticky">
    <div class="sidebar-about">
      <h1>
        <a href="<?= page('home')->url() ?>">
          <?= $site->title()->html() ?>
        </a>
      </h1>
      <p class="lead"><?= $site->description()->ktRaw() ?></p>
    </div>

    <nav class="sidebar-nav">

      <!--
        The code below dynamically generates a sidebar nav of pages with
        `layout: page` in the front-matter. See readme for usage.
      -->

      <?php if($pages->visible()->count()) : ?>
        <?php foreach($pages->visible() as $item) : ?>
        <a class="sidebar-nav-item<?php e($item->isOpen(), ' active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        <?php endforeach ?>
      <?php endif ?>
      
      <a class="sidebar-nav-item" href="<?= $site->github() ?>/archive/v<?= $site->version() ?>.zip">Download</a>
      <a class="sidebar-nav-item" href="<?= $site->github() ?>">GitHub project</a>
      <span class="sidebar-nav-item">Currently v<?= $site->version() ?></span>
    </nav>

    <p>&copy; <?= date('Y') ?>. All rights reserved.</p>
  </div>
</div>
