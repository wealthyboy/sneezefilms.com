<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue child scripts
 */
if ( ! function_exists( 'child_enqueue_scripts' ) ) {

	function child_enqueue_scripts() {
		wp_enqueue_style( 'child-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
	}

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts' );
