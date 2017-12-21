<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <link href="http://gmpg.org/xfn/11" rel="profile">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <!-- Enable responsiveness on mobile devices-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <title>
    <?php e($page->isHomePage(),
      $site->title() . ' · ' . $site->tagline(),
      $page->title() . ' · ' . $site->title()
    ) ?>
  </title>
    
  <!-- CSS -->
  <?= css(array(
    'assets/css/poole.css',
    'assets/css/syntax.css',
    'assets/css/hyde.css'
  )) ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700|Abril+Fatface">

  <!-- Icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $site->url() ?>/assets/apple-touch-icon-144-precomposed.png">
  <link rel="shortcut icon" href="<?= $site->url() ?>/assets/favicon.ico">

  <!-- Planned: RSS -->
  <!--  <link rel="alternate" type="application/rss+xml" title="RSS" href="/atom.xml">-->
</head>
<body>
  
  <?php snippet('sidebar') ?>
  
  <div class="content container">