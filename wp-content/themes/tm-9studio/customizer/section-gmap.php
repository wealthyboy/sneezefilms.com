<?php
$section  = 'gmap';
$priority = 1;

Kiki::add_field( 'theme', array(
	'type'     => 'text',
	'settings' => 'gmap_api_key',
	'label'    => esc_html__( 'Google Map API key', 'tm-9studio' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '',
) );