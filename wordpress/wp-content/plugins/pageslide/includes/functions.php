<?php

function load_wpps() {

	load_wpps_classes();

	do_action( 'wpps_loaded' );

}

function load_wpps_classes() {

	wpps_include( 'classes/class-wpps-settings.php' );

	wpps_include( 'classes/class-wpps-frontend.php' );

	if( is_admin() )
		new Wpps_Settings();
	else
		new Wpps_Frontend();

}

function wpps_include( $file_name, $require = true ) {

	if ( $require )
		require PAGE_SLIDE_PLUGIN_INCLUDE_DIRECTORY . $file_name;
	else
		include PAGE_SLIDE_PLUGIN_INCLUDE_DIRECTORY . $file_name;

}

function wpps_view_path( $view_name, $is_php = true ) {

	if ( strpos( $view_name, '.php' ) === FALSE && $is_php )
		return PAGE_SLIDE_PLUGIN_VIEW_DIRECTORY . $view_name . '.php';

	return PAGE_SLIDE_PLUGIN_VIEW_DIRECTORY . $view_name;

}

function wpps_get_settings() {

	$settings = get_option( 'wpps_settings' );

	if ( ! $settings )
		return apply_filters( 'wpps_settings', Wpps_Settings::default_settings() );

	return apply_filters( 'wpps_settings', $settings );

}