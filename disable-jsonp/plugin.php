<?php
/*
Plugin Name: YOURLS Disable JSONP
Plugin URI: https://github.com/seandrickson/YOURLS-Disable-JSONP
Description: Disables JSONP access for the YOURLS API. Might be a good idea for private installs that don't want any sort of public access to the API (even though you would still need a user/pass or signature for requests.)
Version: 1.0
Author: Sean Hendrickson
Author URI: https://github.com/seandrickson
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();


yourls_add_action( 'pre_api_output', 'seans_pre_api_output' );
function seans_pre_api_output( $argh ) { 
	
	// $argh[0] == $mode
	// $argh[1] == $return
	if( $argh[0] == "jsonp" ) die();
}
