<?php
$section  = 'custom_code_js';
$priority = 1;

Kiki::add_field( 'theme', array(
	'type'     => 'toggle',
	'settings' => 'custom_js_enable',
	'label'    => esc_html__( 'Enable', 'tm-9studio' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 1,
) );

Kiki::add_field( 'theme', array(
	'type'     => 'code',
	'settings' => 'custom_js',
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'jQuery(document).ready(function ($) {});',
	'choices'  => array(
		'language' => 'javascript',
	),
) );
