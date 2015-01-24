<?php

class Wpps_Frontend {

	function __construct() {

		$this->hooks();

		$this->filters();

	}

	function hooks() {

		add_action( 'init', array( $this, 'add_assets' ) );

		add_action( 'wp_footer', array( $this, 'show_pageslide' ) );

	}

	function filters() {


	}

	function add_assets() {

		wp_enqueue_script( 'jquery-pageslide', plugins_url( 'assets/js/jquery.pageslide.min.js', PAGE_SLIDE_PLUGIN_MAIN_FILE ), array( 'jquery' ), PAGE_SLIDE_PLUGIN_VERSION, true );

	}

	function show_pageslide() {

		$settings = wpps_get_settings();

		if ( $settings['status'] !== 'enabled' )
			return FALSE;

		$content = do_shortcode( wpautop( $settings['content'] ) );

		$content = apply_filters( 'wpps_content', $content );

		$options = array(
				'direction' => $settings['direction'],
				'link_trigger' => $settings['link-trigger']
			);

		$options = apply_filters( 'wpps_pre_json_options', $options );

		$options = esc_attr( json_encode( $options ) );

		include wpps_view_path( 'public/slide.php' );

	}
 
}
