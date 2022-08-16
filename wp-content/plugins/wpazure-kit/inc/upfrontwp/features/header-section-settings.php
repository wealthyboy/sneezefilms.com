<?php
function upfrontwp_header_section_setting( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	
			/* Header Section */
			$wp_customize->add_panel( 'header_sections', array(
				'priority' => 10,
				'capability' => 'edit_theme_options',
				'title' => __('Header settings', 'upfrontwp'),
			) );

			
			/* Header Section */
			$wp_customize->add_section( 'header_section_settings' , array(
				'title'      => __('Header settings', 'upfrontwp'),
				'panel'  => 'header_sections',
				'priority'   => 1,
			) );
		
		
		
		
			// button text
			$wp_customize->add_setting( 'header_button_text',array(
			'default' => __('Request a quote','upfrontwp'),
			'sanitize_callback' => 'upfrontwp_header_section_sanitize_text',
			'transport'         => $selective_refresh,
			));	
			$wp_customize->add_control( 'header_button_text',array(
			'label'   => __('Button Text','upfrontwp'),
			'section' => 'header_section_settings',
			'type' => 'text',
			));
			
			// button link
			$wp_customize->add_setting( 'header_button_link',array(
			'default' => '#',
			'sanitize_callback' => 'upfrontwp_header_section_sanitize_text',
			'transport'         => $selective_refresh,
			));	
			$wp_customize->add_control( 'header_button_link',array(
			'label'   => __('Button Link','upfrontwp'),
			'section' => 'header_section_settings',
			'type' => 'text',
			));
			
			// Slider button target
			$wp_customize->add_setting(
			'header_btn_target', 
				array(
				'default'        => true,
				'sanitize_callback' => 'upfrontwp_header_section_sanitize_checkbox',
				'transport'         => $selective_refresh,
				));
			$wp_customize->add_control('header_btn_target', array(
				'label'   => __('Open link in new tab', 'upfrontwp'),
				'section' => 'header_section_settings',
				'type' => 'checkbox',
			));
		
		
		
		
		
	}
	add_action( 'customize_register', 'upfrontwp_header_section_setting' );
	
	//Sanatize text validation
	if ( ! function_exists( 'upfrontwp_header_section_sanitize_text' ) ) :
		function upfrontwp_header_section_sanitize_text( $input ) {

				return wp_kses_post( force_balance_tags( $input ) );
		}
	endif;

	if ( ! function_exists( 'upfrontwp_header_section_sanitize_checkbox' ) ) :
		function upfrontwp_header_section_sanitize_checkbox( $input ) {
				// Boolean check 
		return ( ( isset( $input ) && true == $input ) ? true : false );
		
		}
	endif;
	
	
	