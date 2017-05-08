<?php
/*
 * Plugin Name: AG-WP-Maintenance Mode
 * Plugin URI: http://agilityweb.co.uk
 * Description: Displays a WordPress coming soon page/ maintenance page for anyone who's not logged in.
 * Version: 1.0
 * Author: Caspar Kennerdale
 * Author URI: http://agilityweb.co.uk
 * License: GPL2
 *
*/

/**
 * WordPress Maintenance Page
 *
 * Displays the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * The Coming Soon Page needs to be constructed in views/maintenance.php
 *
 * @return void
 */
function ag_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( $_SERVER["SERVER_PROTOCOL"] . ' 503 Service Temporarily Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'ag_maintenance_mode' );