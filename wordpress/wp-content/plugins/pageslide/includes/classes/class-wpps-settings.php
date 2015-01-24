<?php

class Wpps_Settings {

	function __construct() {

		$this->hooks();

		$this->filters();

	}

	function hooks() {

		//Add the admin dashboard menu

		add_action( 'admin_menu', array( $this, 'admin_menu' ) );

		add_action( 'admin_init', array( $this, 'add_assets' ) );

		add_action( 'admin_init', array( $this, 'plugin_activation_notice' ) );
 
	}

	function filters() {

		add_filter( 'plugin_action_links_' . plugin_basename(PAGE_SLIDE_PLUGIN_MAIN_FILE ), array( $this, 'add_settings_link' ) );

	}

	function add_meta_boxes() {
		
		add_meta_box( 
			'general-settings',
			__( 'General', 'wpmp' ),
			array( $this, 'general_settings_meta_box' ),
			'wpps_settings_page',
			'normal'
		);

	}

	function admin_menu() {

		//Add the 'WP Popup Settings' page to settings dashboard menu

		add_submenu_page( 'options-general.php', 
			__( 'PageSlide Settings', 'wpps' ), 
			__( 'PageSlide', 'wpps' ),
			POPUP_PLUGIN_CAPABILITY , 'wpps-settings',
			array( $this, 'settings_page' )  );

	}

	function settings_page() {

		if ( isset( $_POST['submit'] ) )
			$this->save_settings();

		if ( ! isset( $_GET['tab'] ) )
			$this->admin_tabs();
		else
			$this->admin_tabs( $_GET['tab'] );

		$nonce = wp_create_nonce( 'wpps_settings_nonce' );

		$settings = wpps_get_settings();

		$this->add_meta_boxes();

		$tab = 'settings';

		if ( isset( $_GET['tab'] ) )
			$tab = $_GET['tab'];
		
		if ( $tab == 'settings' )
			include wpps_view_path( 'admin/settings-page.php' );

	}

	function save_settings() {

		if ( ! current_user_can( 'manage_options' ) )
			wp_die( 'You are not allowed to change plugin options' );

		if ( ! wp_verify_nonce( $_POST['nonce'], 'wpps_settings_nonce' ) )
			return FALSE;

		unset( $_POST['saved'] );
		unset( $_POST['nonce'] );

		$_POST['settings']['content'] = stripslashes( $_POST['content'] );

		$tab = 'settings';

		if ( isset( $_GET['tab'] ) )
			$tab = $_GET['tab'];

		if ( $tab == 'settings' ) {

			$settings = $_POST['settings'];

			$settings = apply_filters( 'wpps_settings_before_save', $settings );
			
			update_option( 'wpps_settings', $settings );

		}

	}
	public static function default_settings() {

		$settings = array( 
				'content' => 'Default Content - Click on the main page to close the slide.',
				'status' => 'disabled',
				'direction' => 'right',
				'link-trigger' => 'disabled'
		);

		return apply_filters( 'wpps_default_settings', $settings );

	}

	function add_assets() {

		if ( ! isset( $_GET['page'] ) )
			return FALSE;

		if ( ! $_GET['page'] == 'wpps-settings' )
			return FALSE;

		wp_enqueue_style( 'wpps-settings-page', plugins_url( 'assets/css/admin-settings.css', PAGE_SLIDE_PLUGIN_MAIN_FILE ) );

	}

	function admin_tabs( $current = 'settings' ) {
	    
	    $tabs = array( 
	    		'settings' => __( 'Settings', 'wpps' ), 
	    		'support' => __( 'Support', 'wpps' )
	    	);

	    echo '<div id="icon-themes" class="icon32"><br></div>';
	    
	    echo '<h2 class="nav-tab-wrapper">';
	    
	    foreach( $tabs as $tab => $name ){
	        
	        $class = ( $tab == $current ) ? ' nav-tab-active' : '';
	        
	        if ( $tab == 'support' )
	        	echo "<a class='nav-tab$class' href='http://rocketplugins.com/contact/'>$name</a>";
	        else
	        	echo "<a class='nav-tab$class' href='?page=wpps-settings&tab=$tab'>$name</a>";

	    }

	    echo '</h2>';

	}

	function general_settings_meta_box( $settings ) {

		include wpps_view_path( 'admin/metabox-general.php' );

	}

	function plugin_activation_notice() {

		if ( get_option( 'wpps-activation-notice' ) )
			return FALSE;

		if ( isset( $_REQUEST['page'] ) ) {

			if ( $_REQUEST['page'] == 'wpps-settings' ) {

				add_option( 'wpps-activation-notice', 'showed', '', 'yes' );

				return FALSE;

			}

		}

		$settings_link = admin_url( 'options-general.php?page=wpps-settings' );

		include wpps_view_path( 'admin/plugin_actiavtion_notice.php' );

	}

	function add_settings_link( $links ) {

		$settings_link = admin_url( 'options-general.php?page=wpps-settings' );

		$settings_link = sprintf( __( '<a href="%s">Settings</a>', 'wpps' ), $settings_link );

		return array_merge( $links, array( 
				'settings' => $settings_link
		 	) );

	}

}