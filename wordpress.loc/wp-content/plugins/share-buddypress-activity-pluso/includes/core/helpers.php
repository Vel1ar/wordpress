<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Require template for admin panel
*/
function mxsbap_require_template_admin( $file ) {

	require_once MXSBAP_PLUGIN_ABS_PATH . 'includes/admin/templates/' . $file;

}

/*
* Script
*/
function mxsbap_select_script() {

	global $wpdb;

	$table_name = $wpdb->prefix . MXSBAP_TABLE_SLUG;

	$get_scripts_string = $wpdb->get_row( "SELECT script FROM $table_name WHERE id = 1" );

	return $get_scripts_string->script;

}

/*
* Block for icons
*/
function mxsbap_select_block_icons() {

	global $wpdb;

	$table_name = $wpdb->prefix . MXSBAP_TABLE_SLUG;

	$get_scripts_string = $wpdb->get_row( "SELECT block_icons FROM $table_name WHERE id = 1" );

	return $get_scripts_string->block_icons;

}

/*
* Decode the line of code
*/
function mxsbap_decode_line_code( $string_code ) {

	// Get a permanent link to an activity item
	$permalink = esc_url( bp_get_activity_thread_permalink() );

	// Get the name of the site
	$title = get_bloginfo( 'name' );

	// Get the description of the activity element
	$description = trim( substr( strip_tags( bp_get_activity_content_body() ), 0, 400 ) );
	
	// replace single quotes
	$show_single_quotes = str_replace( '&#039;', '\'', $string_code );

	// special string url
	$replase_special_string_url = str_replace( '%PAGE-URL%', $permalink, $show_single_quotes );

	// special string title
	$replase_special_string_title = str_replace( '%TITLE%', $title, $replase_special_string_url );

	// special string description
	$replase_special_string_description = str_replace( '%DESCRIPTION%', $description, $replase_special_string_title );

	return wp_specialchars_decode( $replase_special_string_description, ENT_COMPAT );

}