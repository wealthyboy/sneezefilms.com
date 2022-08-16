<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles.
 *
 * @package   InsightFramework
 */
class Insight_Enqueue {

	/**
	 * The constructor.
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
		add_action( 'customize_controls_init', array( $this, 'customize_preview_css' ) );
	}

	/**
	 * Enqueue scrips & styles.
	 *
	 * @access public
	 */
	public function enqueue() {
		/*
		 * Enqueue the theme's styles.css.
		 * This is recommended because we can add inline styles there
		 * and some plugins use it to do exactly that.
		 */
		wp_enqueue_style( 'main-style', INSIGHT_THEME_URI . '/style.css' );

		/* Fonts */
		wp_enqueue_style( 'font-awesome', INSIGHT_THEME_URI . '/assets/libs/font-awesome/css/font-awesome.min.css', null, null );
		wp_enqueue_style( 'ionicons', INSIGHT_THEME_URI . '/assets/libs/ionicons/css/ionicons.css' );

		wp_enqueue_script( 'isotope', INSIGHT_THEME_URI . '/assets/libs/isotope/isotope.pkgd.min.js', array( 'jquery' ), null, true );

		wp_enqueue_script( 'imagesloaded' );

		/* Counter */
		wp_enqueue_script( 'waypoint', INSIGHT_THEME_URI . '/assets/libs/waypoint/noframework.waypoints.min.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'odometer', INSIGHT_THEME_URI . '/assets/libs/odometer/odometer.min.js', array( 'jquery' ), null, true );
		wp_enqueue_style( 'odometer-theme-minimal', INSIGHT_THEME_URI . '/assets/libs/odometer/odometer-theme-minimal.css' );

		/* Fitvids */
		if ( is_singular() ) {
			wp_enqueue_script( 'fitvids', INSIGHT_THEME_URI . '/assets/libs/fitvids/jquery.fitvids.js', array( 'jquery' ), null, true );
		}

		/* Slick CSS and JS */
		wp_enqueue_style( 'slick', INSIGHT_THEME_URI . '/assets/libs/slick/slick.css' );
		wp_enqueue_script( 'slick', INSIGHT_THEME_URI . '/assets/libs/slick/slick.min.js', array( 'jquery' ), null, true );

		/* Lightgallery */
		wp_enqueue_script( 'lightgallery', INSIGHT_THEME_URI . '/assets/libs/lightgallery/js/lightgallery-all.min.js', array( 'jquery' ), null, true );
		wp_enqueue_style( 'lightgallery', INSIGHT_THEME_URI . '/assets/libs/lightgallery/css/lightgallery.min.css' );

		if ( Insight::setting( 'header_sticky_enable' ) == 1 ) {
			wp_enqueue_script( 'jquery-headroom', INSIGHT_THEME_URI . '/assets/libs/headroom/jQuery.headroom.js', array( 'jquery' ), null, true );
			wp_enqueue_script( 'headroom', INSIGHT_THEME_URI . '/assets/libs/headroom/headroom.js', array( 'jquery' ), null, true );
		}

		/* One page scroll */
		wp_enqueue_script( 'onepage-scroll', INSIGHT_THEME_URI . '/assets/libs/onepage-scroll/jquery.onepage-scroll.min.js', array( 'jquery' ), null, true );
		wp_enqueue_style( 'onepage-scroll', INSIGHT_THEME_URI . '/assets/libs/onepage-scroll/onepage-scroll.css' );

		/* Featherlight */
		wp_enqueue_script( 'featherlight', INSIGHT_THEME_URI . '/assets/libs/featherlight/featherlight.min.js', array( 'jquery' ), null, true );
		wp_enqueue_style( 'featherlight', INSIGHT_THEME_URI . '/assets/libs/featherlight/featherlight.min.css' );

		wp_enqueue_style( '9studio-font', INSIGHT_THEME_URI . '/assets/libs/9studio/9studio.css' );

		/* Typed */
		wp_enqueue_script( 'typed', INSIGHT_THEME_URI . '/assets/libs/typed/typed.min.js', array( 'jquery' ), null, true );

		/* Justified gallery */
		wp_enqueue_script( 'justified-gallery', INSIGHT_THEME_URI . '/assets/libs/justified-gallery/jquery.justifiedGallery.js', array( 'jquery' ), null, true );
		wp_enqueue_style( 'justified-gallery', INSIGHT_THEME_URI . '/assets/libs/justified-gallery/justifiedGallery.css' );

		/* Menu mobile */
		wp_enqueue_script( 'vimenu', INSIGHT_THEME_URI . '/assets/libs/vimenu.js', array( 'jquery' ), null, true );

		/* Main JS */
		wp_enqueue_script( 'js-main', INSIGHT_THEME_URI . '/assets/js/main.js', array( 'jquery' ), null, true );
		wp_localize_script( 'js-main', 'ajax_var', array(
				'url'   => admin_url( 'admin-ajax.php' ),
				'nonce' => wp_create_nonce( 'ajax-nonce' )
			)
		);
		/* The comment-reply script */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	/**
	 * Add customize preview css
	 *
	 * @since 0.9.1
	 */
	public function customize_preview_css() {
		wp_enqueue_style( 'kirki-custom-css', INSIGHT_THEME_URI . '/assets/admin/css/custom.css' );
	}

}
