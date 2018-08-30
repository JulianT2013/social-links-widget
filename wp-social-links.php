<?php
/**
 * Plugin name: WP Social Links
 * Description: Adds social icons with links to profiles.
 * Version: 1.0
 * Author: Julian Tapping
 */

/**
 * Plugin name: Facebook Footer Link
 * Description: Adds a Facebook profile linke to the end of posts.
 * Version: 1.0
 * Author: Julian Tapping
 */

/* Exit if Accessed Directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Load scripts */
require_once ( plugin_dir_path( __FILE__ ) . '/includes/wp-social-links-scripts.php' );

/* Load class */
require_once ( plugin_dir_path( __FILE__ ) . '/includes/wp-social-links-class.php' );

/* Regiser Widget */
function register_social_links() {
	register_widget( 'WP_Social_Links_Widget' );
}

add_action( 'widgets_init', 'register_social_links' );