<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 30/08/2018
 * Time: 11:40 AM
 */

/* Add scripts */
function sl_add_scripts() {
	wp_enqueue_style( 'sl-main-style', plugins_url() . '/wp-social-links/css/style.css' );
	wp_enqueue_script( 'sl-main-style', plugins_url() . '/wp-social-links/js/main.js' );
}
add_action( 'wp_enqueue_scripts', 'sl_add_scripts', '' );