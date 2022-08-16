<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin installation and activation for WordPress themes
 *
 * @package InsightFramework
 * @since   0.9.7
 */
class Insight_Register_Plugins {

	/**
	 * Insight_Register_Plugins constructor.
	 */
	public function __construct() {
		add_filter( 'insight_core_tgm_plugins', array( $this, 'register_required_plugins' ) );
	}

	public function register_required_plugins() {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(
			array(
				'name'     => 'Insight Core',
				'slug'     => 'insight-core',
				'source'   => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/3eb51b0578fa70c15bfccf10ef7835bcef3ce3ac/insight-core-159.zip',
				'version'  => '1.5.9',
				'required' => true,
			),
			array(
				'name'     => 'WPBakery Page Builder',
				'slug'     => 'js_composer',
				'source'   => 'https://www.dropbox.com/s/j3754q73te76vs2/js_composer-6.1.zip?dl=1',
				'version'  => '6.1',
				'required' => true,
			),
			array(
				'name'     => 'Revolution Slider',
				'slug'     => 'revslider',
				'source'   => 'https://www.dropbox.com/s/lw5c6lvf6zekitl/revslider-6.1.5.zip?dl=1',
				'version'  => '6.1.5',
				'required' => true,
			),
			array(
				'name'     => 'Vafpress Post Formats UI',
				'slug'     => 'vafpress-post-formats-ui',
				'source'   => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/6d99bde830efc40439c56def18eca09706017e8a/vafpress-post-formats-ui-199.zip',
				'version'  => '1.99',
				'required' => false,
			),
			array(
				'name'     => 'WooCommerce',
				'slug'     => 'woocommerce',
				'required' => false
			),
			array(
				'name'     => 'WPC Product Bundles',
				'slug'     => 'woo-product-bundle',
				'required' => false,
			),
			array(
				'name'     => 'WPC Smart Quick View',
				'slug'     => 'woo-smart-quick-view',
				'required' => false,
			),
			array(
				'name'     => 'WPC Smart Compare',
				'slug'     => 'woo-smart-compare',
				'required' => false,
			),
			array(
				'name'     => 'WPC Smart Wishlist',
				'slug'     => 'woo-smart-wishlist',
				'required' => false,
			),
			array(
				'name'     => 'MailChimp for WordPress',
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
			),
			array(
				'name'     => 'Contact Form 7',
				'slug'     => 'contact-form-7',
				'required' => false,
			),
		);

		return $plugins;
	}

}
