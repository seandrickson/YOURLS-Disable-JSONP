<?php
/*
Plugin Name: YOURLS Disable JSONP
Plugin URI: https://github.com/seandrickson/YOURLS-Disable-JSONP
Description: Disables JSONP access for the YOURLS API. Might be a good idea for private installs that don't want any sort of public access to the API (even though you would still need a user/pass or signature for requests.)
Version: 2.0
Author: Sean Hendrickson
Author URI: https://github.com/seandrickson
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

/**
 * Block JSONP output from the API.
 *
 * YOURLS actions receive their arguments bundled in a single array. For
 * 'pre_api_output' that array is: [ $mode, $output, $send_headers, $echo ].
 *
 * @param array $args  Action arguments; $args[0] is the requested output format
 */
yourls_add_action( 'pre_api_output', 'seans_disable_jsonp_pre_api_output' );
function seans_disable_jsonp_pre_api_output( $args ) {
	$mode = is_array( $args ) && isset( $args[0] ) ? $args[0] : $args;

	if( !is_string( $mode ) || strtolower( $mode ) !== 'jsonp' ) {
		return;
	}

	// Answer with a plain JSON error instead of a JSONP payload
	yourls_api_output( 'json', array(
		'errorCode'  => '403',
		'statusCode' => '403',
		'message'    => 'JSONP is disabled on this server',
	) );
	die();
}
