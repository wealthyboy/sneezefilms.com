<?php
$section  = 'shop';
$priority = 1;

Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'shop_archive_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Product Archive', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'        => 'radio-image',
	'settings'    => 'shop_layout',
	'label'       => esc_html__( 'Layout', 'tm-9studio' ),
	'description' => esc_html__( 'Choose layout for all product archive pages as product category, product tag, product search...', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => Insight_Helper::get_list_page_layout(),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'shop_archive_product_columns',
	'label'       => esc_html__( 'Product Columns', 'tm-9studio' ),
	'description' => esc_html__( 'Controls the columns of product on shop or product category page.', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '3',
	'choices'     => array(
		'2' => esc_html__( '2', 'tm-9studio' ),
		'3' => esc_html__( '3', 'tm-9studio' ),
		'4' => esc_html__( '4', 'tm-9studio' ),
	),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'select',
	'settings'    => 'shop_archive_new_days',
	'label'       => esc_html__( 'New Badge (Days)', 'tm-9studio' ),
	'description' => esc_html__( 'If the product was published within the newness time frame display the new badge.', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '3',
	'choices'     => array(
		'1'  => esc_html__( '1 day', 'tm-9studio' ),
		'2'  => esc_html__( '2 days', 'tm-9studio' ),
		'3'  => esc_html__( '3 days', 'tm-9studio' ),
		'4'  => esc_html__( '4 days', 'tm-9studio' ),
		'5'  => esc_html__( '5 days', 'tm-9studio' ),
		'6'  => esc_html__( '6 days', 'tm-9studio' ),
		'7'  => esc_html__( '7 days', 'tm-9studio' ),
		'8'  => esc_html__( '8 days', 'tm-9studio' ),
		'9'  => esc_html__( '9 days', 'tm-9studio' ),
		'10' => esc_html__( '10 days', 'tm-9studio' ),
	),
) );

Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'shop_single_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Product Single', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'        => 'radio-image',
	'settings'    => 'shop_single_layout',
	'label'       => esc_html__( 'Layout', 'tm-9studio' ),
	'description' => esc_html__( 'Choose layout for single product page.', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => Insight_Helper::get_list_page_layout(),
) );