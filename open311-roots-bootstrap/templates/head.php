<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

  <!-- Custom fonts -->
  <link href='//fonts.googleapis.com/css?family=Titillium+Web:400,400italic,600,600italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
  
  <?php wp_head(); ?>
</head>
