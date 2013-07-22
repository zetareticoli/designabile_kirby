<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <?php echo css('assets/styles/normalize.min.css') ?>
  <?php echo css('assets/styles/main.css') ?>
  <?php echo css('assets/webfonts/ss-social-regular.css') ?>
  <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/ed5f2f47-0a57-46c8-b430-6664fc571e13.css"/>

  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
  <![endif]-->
</head>

<body class="p-<?php echo $page->template() ?>">

<!-- CSSAward badge -->
<div id="cssawards"><a href="http://cssawards.net/designabile" target="_blank">designabile</a></div>

<div class="header-container">
    <header class="wrapper cf">
        <?php snippet('menu') ?>

        <h2 class="brand"><a href="<?php echo url() ?>">designabile</a></h2>
    </header>
</div>