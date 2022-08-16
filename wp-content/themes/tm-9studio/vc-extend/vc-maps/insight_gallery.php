<?php

class WPBakeryShortCode_Insight_Gallery extends WPBakeryShortCode {
}

vc_map( array(
	'name'                      => esc_html__( 'Gallery', 'tm-9studio' ),
	'base'                      => 'insight_gallery',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'imgradio',
			'heading'     => esc_html__( 'Style', 'tm-9studio' ),
			'param_name'  => 'style',
			'value'       => array(
				'gallery-v1' => array(
					'img'   => INSIGHT_THEME_URI . '/assets/admin/images/shortcode-style/gallery/masonry.png',
					'title' => 'Masonry v1',
				),
				'gallery-v2' => array(
					'img'   => INSIGHT_THEME_URI . '/assets/admin/images/shortcode-style/gallery/masonry.png',
					'title' => 'Masonry v2',
				),
			),
			'std'         => 'gallery-v1',
			'admin_label' => true,
		),
		array(
			'type'        => 'ajax-search',
			'class'       => '',
			'heading'     => esc_html__( 'Categories', 'tm-9studio' ),
			'param_name'  => 'categories',
			'ajax_type'   => 'taxonomy',
			'ajax_get'    => 'ic_gallery_category',
			'ajax_field'  => 'slug',
			'ajax_limit'  => 100000,
			'admin_label' => true,
		),
		array(
			'type'        => 'ajax-search',
			'class'       => '',
			'heading'     => esc_html__( 'Categories Default', 'tm-9studio' ),
			'param_name'  => 'categories_default',
			'ajax_type'   => 'taxonomy',
			'ajax_get'    => 'ic_gallery_category',
			'ajax_field'  => 'slug',
			'ajax_limit'  => 1,
			'admin_label' => true,
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order by', 'tm-9studio' ),
			'param_name'  => 'order_by',
			'value'       => array(
				'Default'            => '',
				'Title'              => 'title',
				'Date'               => 'date',
				'Random'             => 'rand',
				'Comment count'      => 'comment_count',
				'Slug'               => 'slug',
				'ID'                 => 'id',
				'Last modified date' => 'modified',
				'Author'             => 'author',
			),
			'save_always' => true,
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Order', 'tm-9studio' ),
			'param_name'  => 'order',
			'value'       => array(
				'Default' => '',
				'ASC'     => 'ASC',
				'DESC'    => 'DESC',
			),
			'save_always' => true,
		),
		array(
			'type'       => 'number',
			'heading'    => esc_html__( 'Number', 'tm-9studio' ),
			'param_name' => 'number',
			'min'        => 1,
			'suffix'     => esc_html__( 'Number of image(s) per page', 'tm-9studio' ),
		),
		array(
			'type'       => 'number',
			'heading'    => esc_html__( 'Image width', 'tm-9studio' ),
			'param_name' => 'width',
			'min'        => 0,
			'value'      => 370,
			'suffix'     => esc_html__( 'px', 'tm-9studio' ),
		),
		array(
			'type'       => 'number',
			'heading'    => esc_html__( 'Image height', 'tm-9studio' ),
			'param_name' => 'height',
			'value'      => 230,
			'min'        => 0,
			'suffix'     => esc_html__( 'px', 'tm-9studio' ),
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'css' ),
	)
) );
