<?php
/**
 * Theme Customizer
 *
 * @package tm-9studio
 */

/**
 * Setup configuration
 *
 * @since 0.9
 */
Kiki::add_config( 'theme', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

/**
 * Add sections
 *
 * @since 0.9.7
 */
$priority = 1;
Kiki::add_section( 'site', array(
	'title'    => esc_html__( 'Site', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'header', array(
	'title'    => esc_html__( 'Header', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'navigation', array(
	'title'    => esc_html__( 'Navigation', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'title_breadcrumbs', array(
	'title'    => esc_html__( 'Title & Breadcrumbs', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'newsletter', array(
	'title'    => esc_html__( 'Newsletter', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'footer', array(
	'title'    => esc_html__( 'Footer', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'copyright', array(
	'title'    => esc_html__( 'Copyright', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'post', array(
	'title'    => esc_html__( 'Post', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'logo', array(
	'title'    => esc_html__( 'Logo', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'shop', array(
	'title'    => esc_html__( 'Shop', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'socials', array(
	'title'    => esc_html__( 'Socials', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( '404', array(
	'title'    => esc_html__( '404 Page', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'gmap', array(
	'title'    => esc_html__( 'Google Map', 'tm-9studio' ),
	'priority' => $priority ++,
) );

Kiki::add_section( 'custom_code_js', array(
	'title'    => esc_html__( 'Additional JS', 'tm-9studio' ),
	'priority' => $priority ++,
) );

/**
 * Load modules
 *
 * @since 0.9
 */
require_once INSIGHT_THEME_DIR . '/customizer/section-title.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-copyright.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-navigation.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-newsletter.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-footer.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-header.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-logo.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-post.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-site.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-shop.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-socials.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-404.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-gmap.php';
require_once INSIGHT_THEME_DIR . '/customizer/section-custom-js.php';
