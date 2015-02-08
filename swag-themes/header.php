<!DOCTYPE html>
<html lang="ja">

<head>
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/freeze.css" media="screen">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/placeholdem.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

    <?php wp_head(); ?>
</head>

<body>

<div class="header">
    <h1 id="logo">
        <a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a>
    </h1>
    <p id="description"><?php bloginfo('description'); ?></p>

    <!-- Navigation -->
    <?php wp_nav_menu( array ( 'theme_location' => 'header-navi' ) ); ?>
    <!-- /Navigation -->
<div><!-- /header -->
