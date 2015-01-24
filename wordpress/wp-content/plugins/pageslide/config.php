<?php

define( 'PAGE_SLIDE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

define( 'PAGE_SLIDE_PLUGIN_DIR_NAME', dirname( plugin_basename( __FILE__ ) ) );

define( 'PAGE_SLIDE_PLUGIN_PREFIX', 'wpps' ); //WordPress Page Slide

if ( ! defined( 'PAGE_SLIDE_PLUGIN_CAPABILITY' ) )
	define( 'PAGE_SLIDE_PLUGIN_CAPABILITY', 'manage_options' );

define( 'PAGE_SLIDE_PLUGIN_INCLUDE_DIRECTORY_NAME', 'includes' );

define( 'PAGE_SLIDE_PLUGIN_VIEW_DIRECTORY_NAME', 'views' );

define( 'PAGE_SLIDE_PLUGIN_INCLUDE_DIRECTORY', PAGE_SLIDE_PLUGIN_PATH .
									  	PAGE_SLIDE_PLUGIN_INCLUDE_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'PAGE_SLIDE_PLUGIN_VIEW_DIRECTORY', PAGE_SLIDE_PLUGIN_PATH .
									  	PAGE_SLIDE_PLUGIN_VIEW_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'PAGE_SLIDE_PLUGIN_MAIN_FILE', PAGE_SLIDE_PLUGIN_PATH . 'page-slide.php' );

define( 'PAGE_SLIDE_PLUGIN_VERSION', '1.0' );