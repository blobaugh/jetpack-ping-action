<?php
/*
Plugin Name: Jetpack Ping Action
Plugin URI: http://github.com/blobaugh/jetpack-ping-action
Description: Proof of Concept for adding actions that can be hooked into to the Jetpack Monitor ping
Version: 0.6
Author: Ben Lobaugh
Author URI: http://ben.lobaugh.net
*/

if( 'HEAD' == $_SERVER['REQUEST_METHOD'] ) {

add_action( 'init', function() {
	if( false !== strripos( $_SERVER['HTTP_USER_AGENT'], 'jetmon' ) ) {
		do_action( 'jetpack_monitor_ping' );
	}
});


} // end if( 'HEAD' === $_SERVER['REQUEST_METHOD'] )
