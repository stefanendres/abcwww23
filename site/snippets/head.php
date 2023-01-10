<!DOCTYPE html>
<html lang="<?= $kirby->language() ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=1">
    <meta name="description" content="<?php e($page->meta_description(), $page->meta_description()) ?>">
    <meta name="og:description" content="<?php e($page->meta_description(), $page->meta_description()) ?>">
    <?php if ($page->meta_image()->toFile()): ?>
      <meta name="og:image" content="<?= $page->meta_image()->toFile()->url() ?>">
      <meta name="og:image:type" content="<?= $page->meta_image()->toFile()->mime() ?>">
      <meta name="og:image:width" content="<?= $page->meta_image()->toFile()->width() ?>">
      <meta name="og:image:height" content="<?= $page->meta_image()->toFile()->height() ?>">
    <?php endif?>
    <meta name="og:type" content="website">
    <meta name="og:title" content="<?= $site_title ?>">
    <meta name="og:site_name" content="<?= $site_title ?>">
    <meta name="og:url" content="<?= $site->url() ?>">
    <meta name="theme-color" content="#fff">
    <meta name="robots" content="index, nofollow">

    <link rel="shortcut icon" href="<?php // echo $globals->favicon()->toFile()->crop(72)->url() ?>">
    <link rel="apple-touch-icon" href="<?php // echo $globals->favicon()->crop(320)->url() ?>">

    <title><?= $site_title ?></title>

    <?= css('assets/css/normalize.css') ?>
    <?php snippet('scss') ?>

    <!-- load fonts here 
    <link rel="preload" href="assets/fonts/Graphik-Regular-Web.woff2" as="font" type="font/woff2" crossorigin="">
    -->

    <?= js(['assets/js/plugins/modernizr.js', '@auto']) ?>
    <?= js(['assets/js/plugins/lazysizes.min.js', '@auto']) ?>
    
  </head>

  <body class="template-<?= $page->intendedTemplate() ?> page-<?= $page->slug() ?>">
