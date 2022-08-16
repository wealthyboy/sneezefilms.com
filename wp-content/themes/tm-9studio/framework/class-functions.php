<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package   InsightFramework
 * @since     0.9.7
 */
class Insight_Functions {

	/**
	 * Insight_Functions constructor.
	 */
	public function __construct() {
		// Adds custom classes to the array of body classes.
		add_filter( 'body_class', array( $this, 'body_classes' ) );

		// Add mobile menu template before body tag
		add_action( 'wp_footer', array( $this, 'mobile_menu' ) );

		// Add custom JS
		add_action( 'wp_footer', array( $this, 'custom_js' ) );

		// Add extra JS
		add_action( 'wp_footer', array( $this, 'extra_js' ) );

		// #Backtotop
		add_action( 'wp_footer', array( $this, 'scroll_top' ) );

		// VC ajax search
		add_action( 'wp_ajax_vc_ajax_search', array( $this, 'vc_ajax_search' ) );
		add_action( 'wp_ajax_nopriv_vc_ajax_search', array( $this, 'vc_ajax_search' ) );
	}

	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 *
	 * @return array
	 */
	public function body_classes( $classes ) {
		// Adds a class of group-blog to blogs with more than 1 published author.
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}

		// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		// Setup page layout use class
		if ( is_page() ) {
			// Add class by customizer
			$classes[] = 'page--' . Insight::setting( 'page_layout' );
			// Add class by page options
			$classes[] = 'page-private--' . Insight_Helper::get_post_meta( 'page_layout' );
		}

		// Setup page overlay header class
		if ( is_page() || is_singular( 'ic_our_team' ) || is_singular( 'ic_project' ) ) {
			// Page padding
			if ( Insight_Helper::get_post_meta( 'page_padding' ) === 'no' ) {
				$classes[] = 'no-padding';
			}
		}

		// Setup post layout use class
		if ( is_single() ) {
			$classes[] = 'post--' . Insight::setting( 'post_layout' );

			$classes[] = 'post--style--' . Insight_Helper::get_post_option( 'post_single_style' );
		}

		if ( ! is_search() && ( Insight_Helper::get_post_meta( 'body_class' ) !== '' ) ) {
			$classes[] = Insight_Helper::get_post_meta( 'body_class' );
		}

		$classes[] = 'tm-9studio';

		return $classes;
	}

	function vc_ajax_search() {
		$q            = isset( $_GET['q'] ) ? $_GET['q'] : '';
		$ajax_type    = urldecode( isset( $_GET['ajax_type'] ) ? $_GET['ajax_type'] : 'post_type' );
		$ajax_get     = urldecode( isset( $_GET['ajax_get'] ) ? $_GET['ajax_get'] : 'post' );
		$ajax_field   = urldecode( isset( $_GET['ajax_field'] ) ? $_GET['ajax_field'] : 'id' );
		$ajax_get_arr = explode( ',', $ajax_get );
		$arr          = array();
		if ( $ajax_type === 'post_type' ) {
			$params = array(
				'posts_per_page'      => 10,
				'post_type'           => $ajax_get_arr,
				'ignore_sticky_posts' => 1,
				's'                   => $q,
			);
			$loop   = new WP_Query( $params );
			if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) {
					$loop->the_post();
					$arr[] = array(
						'id'   => get_the_ID(),
						'name' => get_the_title(),
					);
				}
			}
			wp_reset_postdata();
		} elseif ( $ajax_type === 'taxonomy' ) {
			$terms = get_terms( array(
				'taxonomy'   => $ajax_get_arr,
				'hide_empty' => false,
			) );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
				foreach ( $terms as $term ) {
					if ( $ajax_field === 'id' ) {
						$arr[] = array(
							'id'   => $term->term_id,
							'name' => $term->name,
						);
					} elseif ( $ajax_field === 'slug' ) {
						$arr[] = array(
							'id'   => $term->slug,
							'name' => $term->name,
						);
					}
				}
			}
		}
		echo json_encode( $arr );
		die();
	}

	/**
	 * Call mobile menu template
	 */
	public function mobile_menu() {
		get_template_part( 'components/mobile' );
	}

	/**
	 * Load custom JS
	 */
	public function custom_js() {
		if ( Insight::setting( 'custom_js_enable' ) == 1 ) {
			echo '<script class="custom-js">' . Insight::setting( 'custom_js' ) . '</script>';
		}
	}

	/**
	 * Scroll to top JS
	 */
	public function scroll_top() {
		?>
		<?php if ( Insight::setting( 'enable_backtotop' ) == 1 ) : ?>
            <a class="scrollup"><i class="ion-android-arrow-up"></i></a>
            <script>
				jQuery( document ).ready( function( $ ) {
					var $window = $( window );
					// Scroll up
					var $scrollup = $( '.scrollup' );

					$window.scroll( function() {
						if ( $window.scrollTop() > 100 ) {
							$scrollup.addClass( 'show' );
						} else {
							$scrollup.removeClass( 'show' );
						}
					} );
					$scrollup.on( 'click', function( evt ) {
						$( "html, body" ).animate( {scrollTop: 0}, 600 );
						evt.preventDefault();
					} );
				} );
            </script>
		<?php endif; ?>
		<?php
	}

	/**
	 * Extra JS
	 */
	public function extra_js() {
		if ( Insight::setting( 'header_sticky_enable' ) == 1 ) {
			?>
            <script>
				jQuery( document ).ready( function( $ ) {
					var hh = $( '.header' ).outerHeight();
					var offset = $( '.header' ).offset();
					$( ".header" ).headroom(
						{
							offset: offset.top,
							onTop: function() {
								if ( jQuery( '.logo-image' ).attr( 'data-normal' ) !== '' ) {
									jQuery( '.logo-image' ).attr( 'src', jQuery( '.logo-image' ).attr( 'data-normal' ) );
								}
								if ( ! jQuery( 'header' ).hasClass( 'header-overlay' ) ) {
									jQuery( '#content' ).css( 'margin-top', 0 );
								}
							},
							onNotTop: function() {
								if ( jQuery( '.logo-image' ).attr( 'data-sticky' ) !== '' ) {
									jQuery( '.logo-image' ).attr( 'src', jQuery( '.logo-image' ).attr( 'data-sticky' ) );
								}
								if ( ! jQuery( 'header' ).hasClass( 'header-overlay' ) ) {
									jQuery( '#content' ).css( 'margin-top', hh );
								}
							},
						}
					);
				} );
            </script>
			<?php
		}
	}
}
