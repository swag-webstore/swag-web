<?php

// require css
function swag_styles() {
    wp_enqueue_scripts( 'bootstrap', get_bloginfo('stylesheet_directory') . '/css/bootstrap.css', array(), null, 'all');
    wp_enqueue_scripts( 'bootstrap', get_bloginfo('stylesheet_directory') . '/css/animate.css', array(), null, 'all');
    wp_enqueue_scripts( 'bootstrap', get_bloginfo('stylesheet_directory') . '/css/font-awesome.min.css', array(), null, 'all');
    wp_enqueue_scripts( 'bootstrap', get_bloginfo('stylesheet_directory') . '/css/freeze.css', array(), null, 'all');
    wp_enqueue_scripts( 'bootstrap', get_bloginfo('stylesheet_directory') . '/css/slick.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'swag_styles');

// require js
function swag_scripts() {
        wp_enqueue_script( 'bootstrap', get_bloginfo( 'stylesheet_directory') . '/js/bootstrap.min.js', array(), false, true );
        wp_enqueue_script( 'jquery', get_bloginfo( 'stylesheet_directory') . '/js/jquery-1.11.1.min.js', array(), false, true );
        wp_enqueue_script( 'slick', get_bloginfo( 'stylesheet_directory') . '/js/jquery-1.11.1.min.js', array(), false, true );
        wp_enqueue_script( 'placeholdem', get_bloginfo( 'stylesheet_directory') . '/js/placeholdem.min.js', array(), false, true );
        wp_enqueue_script( 'rs-plugin', get_bloginfo( 'stylesheet_directory') . '/js/rs-plugin/js/jquery.themepunch.plugins.min.js', array(), false, true );
        wp_enqueue_script( 'rs-plugin', get_bloginfo( 'stylesheet_directory') . '/js/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), false, true );
        wp_enqueue_script( 'waypoints', get_bloginfo( 'stylesheet_directory') . '/js/waypoints.min.js', array(), false, true );
        wp_enqueue_script( 'script', get_bloginfo( 'stylesheet_directory') . '/js/scripts.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'swag_scripts');
