<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>

  <?php echo css('assets/fonts/fonts.css') ?>
  <?php echo css('http://fonts.googleapis.com/css?family=Work+Sans:500,600,400') ?>
  <?php echo css('https://fonts.googleapis.com/css?family=Roboto+Slab') ?>
  <?php echo css('assets/css/site.css') ?>
  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48545782-2', 'auto');
  ga('send', 'pageview');

</script>
    

  <?php if($page->description() != ''): ?>
  <meta name="description" content="<?php echo html($page->description()) ?>" />
  <?php else: ?>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <?php endif ?>

  <link rel="icon" href="<?php echo url('assets/img/favicon.png') ?>" />
  <link rel="apple-touch-icon" href="<?php echo url('assets/img/apple-touch-icon.png') ?>" />
  <meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Blog Feed" />
</head>
<body>

  <header class="site-header-background" role="banner">
    <div class="site-header">
        <div class="site-header-content">
            <a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a>
        </div>
    </div>
</header>
