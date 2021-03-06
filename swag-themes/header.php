<!DOCTYPE html>
<html lang="ja">

<head>
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fullPage/examples.css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fullPage/jquery.fullPage.css" media="screen">

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fullPage/jquery.fullPage.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fullPage/jquery.fullPage.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fullPage/examples.js"></script>

    <?php wp_head(); ?>
</head>

<body>
<!--
┌┴┐┌┴┐┌┴┐　-┼-　￣Ｔフ￣Ｔフ　＿＿　/ /
　　_ノ　　　_ノ　　　_ノ ヽ／|　　　 ﾉ 　　 ﾉ 　　　　　 。。
　　　　 　 /＼＿＿_／ヽ
　　　　／ﾉヽ　　　　　　 ヽ、
　 　　/　⌒''ヽ,,,)ii(,,,ｒ'''''' :::ﾍ
　　　 | ﾝ（○）,ﾝ　<､（○）<::|　　|｀ヽ､
　　 　|　 ｀⌒,,ﾉ(､_, )ヽ⌒´ ::l　　|::::ヽl 　
.　　　ヽ　ヽ iｌ´ﾄｪｪｪｲ｀ｌi　ｒ ;/　 .|:::::ｉ |
　　　／ヽ　 !ｌ |,ｒ-ｒ-| ｌ! 　 /ヽ　 |:::::ｌ |
　　/　　|^|ヽ､ ｀ﾆﾆ´一／|^|｀,ｒ-|:「￣
　 /　　 | .|　　 　 　 　 　 | .|　,Ｕ(ﾆ ､)ヽ
　/　 　 | .|　　 　 　 　 　 | .|人(_(ﾆ､ﾉﾉ

-->

<div class="container">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <!-- setting toggle -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- ブランド名 ロゴ名の表示 -->
            <a href="/"><img src="http://210.140.160.104/wp-content/uploads/2015/04/logo.png" class="navbar-brand" alt="Responsive image"></a>
        </div><!-- navbar-header -->
        <!-- メニュー -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" href="">SHOP LIST<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/shop/?location=kobe">KOBE</a></li>
                    <li><a href="/shop/?location=nagoya">NAGOYA</a></li>
                    <li><a href="/shop/?location=yokohama">YOKOHAMA</a></li>
                    <li><a href="/shop/?location=fukuoka">FUKUOKA</a></li>
                  </ul>
                </li>
                <li><a href="/news">NEWS</a></li>
                <li><a href="/company">COMPANY</a></li>
                <li><a href="<?php echo get_online_shop(); ?>">ONLINE STORE</a></li>
            </ul>
        </div> <!-- navbar-collapse -->
    </div><!-- navbar -->
</div>
