<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSBAPAdminMain
{

	// A unique string for creating a menu bar
	public $plugin_name;

	/*
	* MXSBAPAdminMain constructor
	*/
	public function __construct()
	{

		$this->plugin_name = MXSBAP_PLUGN_BASE_NAME;

		$this->include();

	}

	/*
	* Include the necessary basic files for the admin panel
	*/
	public function include()
	{

		// require database-talk class
		require_once MXSBAP_PLUGIN_ABS_PATH . 'includes/admin/class-database-talk.php';

	}

	/*
	* Registration of styles and scripts
	*/
	public function register()
	{

		// register scripts and styles
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );

		// register admin menu
		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

		// add link Settings under the name of the plugin
		add_filter( "plugin_action_links_$this->plugin_name", array( $this, 'settings_link' ) );

	}

		// register scripts and styles
		public function enqueue()
		{

			wp_enqueue_style( 'mxsbap_font_awesome', MXSBAP_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

			wp_enqueue_style( 'mxsbap_admin_style', MXSBAP_PLUGIN_URL . 'includes/admin/assets/css/style.css', array( 'mxsbap_font_awesome', 'thickbox' ), MXSBAP_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( 'mxsbap_admin_script', MXSBAP_PLUGIN_URL . 'includes/admin/assets/js/script.js', array( 'jquery', 'thickbox' ), MXSBAP_PLUGIN_VERSION, false );

		}

		// register admin menu
		public function add_admin_pages()
		{
	
			// add submenu
			add_submenu_page( 'options-general.php', 'Configure Plugin', 'Share Pluso', 'manage_options', 'mxsbap_share_pluso', array( $this, 'index_page' ) );

		}

			// load template
			public function index_page()
			{

				// require index page
				mxsbap_require_template_admin( 'index.php' );

			}

		// add settings link
		public function settings_link( $links )
		{

			$settings_link = '<a href="admin.php?page=mxsbap_share_pluso">Settings</a>';

			array_push( $links, $settings_link );

			return $links;

		}

}

// Initialize
$initialize_class = new MXSBAPAdminMain();

// Apply scripts and styles
$initialize_class->register();