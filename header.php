<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="site-header">
    <div id="site-header-content-wrapper">
      <div id="site-title">
        <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
      </div>

      <div id="site-header-nav">
        <?php wp_nav_menu(); ?>
      </div>
    </div>
  </div>