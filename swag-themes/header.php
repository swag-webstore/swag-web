<!DOCTYPE html>
<html lang="ja">

<head>
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fullPage/examples.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fullPage/jquery.fullPage.css" media="screen">

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fullPage/jquery.fullPage.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fullPage/jquery.fullPage.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fullPage/examples.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            anchors: ['firstPage', 'secondPage', '3rdPage'],
                sectionsColor: ['#000000', '#1BBC9B', '#7E8F7C'],
                navigation: true,
                navigationPosition: 'right',
                navigationTooltips: ['First page', 'Second page', 'Third and last page'],
                responsive: 900
        });
    });
    </script>
<!--
<style>
#header, #footer{
    position:fixed;
    height: 50px;
    display:block;
    width: 100%;
    background: #333;
    z-index:9;
    text-align:center;
    color: #f2f2f2;
    padding: 20px 0 0 0;
}
#header{
    top:0px;
}
#footer{
    bottom:0px;
}
    </style>

-->
    <?php wp_head(); ?>
</head>

<body>
<ul id="menu">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First slide</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
</ul>
<!-- /header -->
