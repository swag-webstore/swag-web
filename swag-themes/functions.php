<?php

// require css
function swag_styles() {
    wp_enqueue_scripts( 'bootstrap', get_bloginfo('stylesheet_directory') . 'css/bootstrap.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'swag_styles');

// require js
function swag_scripts() {
        wp_enqueue_script( 'bootstrap', get_bloginfo( 'stylesheet_directory') . '/bootstrap.min.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'swag_scripts');
