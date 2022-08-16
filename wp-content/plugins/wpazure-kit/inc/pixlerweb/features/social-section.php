<?php
function wpazure_kit_busicorp_section_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	
	
	/* News Section Start */
		
		$wp_customize->add_section( 'home_social_section' , array(
		'title'      => __('Social settings', 'wpazure-kit'),
		'panel'  => 'homepage_sections',
		'priority'   => 5,
		) );
		
		$wp_customize->add_setting( 'social_section_enable', array(
			'default' => true,
			'sanitize_callback' => 'consultera_home_news_sanitize_checkbox',
		) );
		
		$wp_customize->add_control('social_section_enable', array(
			'label'    => __('Show Social section', 'wpazure-kit' ),
			'section'  => 'home_social_section',
			'type' => 'checkbox',
		) );

		
		
		
		$wp_customize->add_setting( 'home_social_facebook_url',array(
		'capability'     => 'edit_theme_options',
		'default' => __('#','wpazure-kit'),
		'sanitize_callback' => 'consultera_home_news_sanitize_text_content',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'home_social_facebook_url',array(
		'label'   => __('Facebook Url','wpazure-kit'),
		'section' => 'home_social_section',
		'type' => 'text',
		));
		
		
		
		$wp_customize->add_setting( 'home_social_twitter_url',array(
		'capability'     => 'edit_theme_options',
		'default' => __('#','wpazure-kit'),
		'sanitize_callback' => 'consultera_home_news_sanitize_text_content',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'home_social_twitter_url',array(
		'label'   => __('Twitter Url','wpazure-kit'),
		'section' => 'home_social_section',
		'type' => 'text',
		));
		
		$wp_customize->add_setting( 'home_social_linkedin_url',array(
		'capability'     => 'edit_theme_options',
		'default' => __('#','wpazure-kit'),
		'sanitize_callback' => 'consultera_home_news_sanitize_text_content',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'home_social_linkedin_url',array(
		'label'   => __('Linkedin Url','wpazure-kit'),
		'section' => 'home_social_section',
		'type' => 'text',
		));
		
		$wp_customize->add_setting( 'home_social_youtube_url',array(
		'capability'     => 'edit_theme_options',
		'default' => __('#','wpazure-kit'),
		'sanitize_callback' => 'consultera_home_news_sanitize_text_content',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'home_social_youtube_url',array(
		'label'   => __('Youtube Url','wpazure-kit'),
		'section' => 'home_social_section',
		'type' => 'text',
		));
		
		$wp_customize->add_setting( 'home_social_instagram_url',array(
		'capability'     => 'edit_theme_options',
		'default' => __('#','wpazure-kit'),
		'sanitize_callback' => 'consultera_home_news_sanitize_text_content',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'home_social_instagram_url',array(
		'label'   => __('Instagram Url','wpazure-kit'),
		'section' => 'home_social_section',
		'type' => 'text',
		));
		
		$wp_customize->add_setting( 'home_social_pinterest_url',array(
		'capability'     => 'edit_theme_options',
		'default' => __('#','wpazure-kit'),
		'sanitize_callback' => 'consultera_home_news_sanitize_text_content',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'home_social_pinterest_url',array(
		'label'   => __('Pinterest Url','wpazure-kit'),
		'section' => 'home_social_section',
		'type' => 'text',
		));

	
		
		if ( ! function_exists( 'consultera_home_news_sanitize_text_content' ) ) :
		
			function consultera_home_news_sanitize_text_content( $input, $setting ) {

				return ( stripslashes( wp_filter_post_kses( addslashes( $input ) ) ) );

			}
		endif;
		
		function consultera_home_news_sanitize_checkbox( $checked ) {
			// Boolean check.
			return ( ( isset( $checked ) && true == $checked ) ? true : false );
		}

}

add_action( 'customize_register', 'wpazure_kit_busicorp_section_setting' );


	

/**
 * Add selective refresh for latest new section.
 */
function wpazure_kit_consultera_home_social_section_partials( $wp_customize ){

	// Info one selective refresh
	$wp_customize->selective_refresh->add_partial( 'home_social_facebook_url', array(
		'selector'            => '.social-media-section .social-block .fbb',
		'settings'            => 'home_social_facebook_url',
		//'render_callback' => 'wpazure_kit_busicorp_facebook_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_social_twitter_url', array(
		'selector'            => '.social-media-section .social-block .tww',
		'settings'            => 'home_social_twitter_url',
		//'render_callback' => 'wpazure_kit_busicorp_twitter_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_social_linkedin_url', array(
		'selector'            => '.social-media-section .social-block .lin',
		'settings'            => 'home_social_linkedin_url',
		//'render_callback' => 'wpazure_kit_busicorp_linkedin_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_social_youtube_url', array(
		'selector'            => '.social-media-section .social-block .ytb',
		'settings'            => 'home_social_youtube_url',
		//'render_callback' => 'wpazure_kit_busicorp_youtube_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_social_instagram_url', array(
		'selector'            => '.social-media-section .social-block .ins',
		'settings'            => 'home_social_instagram_url',
		//'render_callback' => 'wpazure_kit_busicorp_instagram_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_social_pinterest_url', array(
		'selector'            => '.social-media-section .social-block .gpp',
		'settings'            => 'home_social_pinterest_url',
		//'render_callback' => 'wpazure_kit_busicorp_pinterest_render_callback',
	
	) );
}

add_action( 'customize_register', 'wpazure_kit_consultera_home_social_section_partials' );



function wpazure_kit_busicorp_facebook_render_callback() {
	return get_theme_mod( 'home_social_facebook_url' );
}

function wpazure_kit_busicorp_twitter_render_callback() {
	return get_theme_mod( 'home_social_twitter_url' );
}

function wpazure_kit_busicorp_linkedin_render_callback() {
	return get_theme_mod( 'home_social_linkedin_url' );
}

function wpazure_kit_busicorp_youtube_render_callback() {
	return get_theme_mod( 'home_social_youtube_url' );
}

function wpazure_kit_busicorp_instagram_render_callback() {
	return get_theme_mod( 'home_social_linkedin_url' );
}

function wpazure_kit_busicorp_pinterest_render_callback() {
	return get_theme_mod( 'home_social_youtube_url' );
}



