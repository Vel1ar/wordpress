<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSBAPFrontEndMain
{

	/*
	* MXSBAPFrontEndMain constructor
	*/
	public function __construct()
	{

		// hook for JS
		add_action( 'wp_footer', array( $this, 'mxsbap_add_pluso_script' ), 100 );

		// hook for extra "pluso" button
		add_action( 'bp_activity_entry_content', array( $this, 'mxsbap_add_share_button' ), 100 );

	}

	/*
	* Registration of styles and scripts
	*/
	public function register()
	{

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );


	}

		// enqueue
		public function enqueue()
		{

			wp_enqueue_style( 'mxsbap_font_awesome', MXSBAP_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

			wp_enqueue_style( 'mxsbap_style', MXSBAP_PLUGIN_URL . 'includes/frontend/assets/css/style.css', array( 'mxsbap_font_awesome' ), MXSBAP_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( 'mxsbap_script', MXSBAP_PLUGIN_URL . 'includes/frontend/assets/js/script.js', array( 'jquery' ), MXSBAP_PLUGIN_VERSION, false );

		}

	/*
	* Print JS script
	*/
	public function mxsbap_add_pluso_script()
	{

		print mxsbap_decode_line_code( mxsbap_select_script() );

	}

	/*
	* Print Pluso buttons
	*/ 
	public function mxsbap_add_share_button()
	{

		print mxsbap_decode_line_code( mxsbap_select_block_icons() );

	}


}

// Initialize
$initialize_class = new MXSBAPFrontEndMain();

// Apply scripts and styles
$initialize_class->register();