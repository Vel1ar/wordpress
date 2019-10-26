<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

final class MXSBAPMainClass
{

	/*
	* MXSBAPMainClass constructor
	*/
	public function __construct()
	{

		$this->define_constants();

		$this->include();

	}

	/*
	* Define MXSBAP constants
	*/
	public function define_constants()
	{

		$this->define( 'MXSBAP_TABLE_SLUG', 'mxsbap_share_table' );

		// include php files
		$this->define( 'MXSBAP_PLUGIN_ABS_PATH', dirname( MXSBAP_PLUGIN_PATH ) . '/' );

		// version
		$this->define( 'MXSBAP_PLUGIN_VERSION', '1.0' ); // Must be replaced before production on for example '1.0'


	}

	/*
	* Include required core files
	*/
	public function include()
	{

		// Basis functions
		require_once MXSBAP_PLUGIN_ABS_PATH . 'includes/class-basis-plugin-class.php';

		// Helpers
		require_once MXSBAP_PLUGIN_ABS_PATH . 'includes/core/helpers.php';

		// Part of the Frontend
		require_once MXSBAP_PLUGIN_ABS_PATH . 'includes/frontend/class-frontend-main.php';

		// Part of the Administrator
		require_once MXSBAP_PLUGIN_ABS_PATH . 'includes/admin/class-admin-main.php';

	}

	// Define function
	private function define( $mame, $value )
	{

		if( ! defined( $mame ) )
		{

			define( $mame, $value );

		}

	}

}