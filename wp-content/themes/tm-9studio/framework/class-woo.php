<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Custom functions for WooCommerce
 *
 * @package InsightFramework
 */
class Insight_Woo {

	/**
	 * The constructor.
	 */
	public function __construct() {
		add_filter( 'woocommerce_add_to_cart_fragments', array( $this, 'woo_header_cart_fragment' ), 10, 1 );

		// Hide default smart compare
		add_filter( 'filter_wooscp_button_archive', function() {
			return '0';
		} );
		add_filter( 'filter_wooscp_button_single', function() {
			return '0';
		} );
		add_filter( 'wooscp_bar_btn_color_default', function() {
			return Insight::PRIMARY_COLOR;
		} );

		// Hide default smart quick view
		add_filter( 'woosq_button_position', function() {
			return '0';
		} );

		// Hide default wishlist
		add_filter( 'woosw_button_position_archive', function() {
			return '0';
		} );
		add_filter( 'woosw_button_position_single', function() {
			return '0';
		} );
		add_filter( 'woosw_color_default', function() {
			return Insight::PRIMARY_COLOR;
		} );

		add_action( 'woocommerce_after_add_to_cart_button', array( $this, 'woo_after_add_to_cart_button' ) );
	}

	public static function header_cart() {
		$cart_html = '<a class="mini-cart" href="' . wc_get_cart_url() . '"><div class="mini-cart-icon" data-count="' . WC()->cart->get_cart_contents_count() . '"></div></a>';

		return $cart_html;
	}

	function woo_header_cart_fragment( $fragments ) {
		ob_start();
		echo self::header_cart();
		$fragments['a.mini-cart'] = ob_get_clean();

		return $fragments;
	}

	function woo_after_add_to_cart_button() {
		global $product;
		$product_id = $product->get_id();
		if ( class_exists( 'WPcleverWoosw' ) ) {
			echo '<div class="wishlist-btn">' . do_shortcode( '[woosw id="' . $product_id . '" type="link"]' ) . '</div>';
		}
		if ( class_exists( 'WPcleverWooscp' ) ) {
			echo '<div class="compare-btn">' . do_shortcode( '[wooscp id="' . $product_id . '" type="link"]' ) . '</div>';
		}
	}
}
