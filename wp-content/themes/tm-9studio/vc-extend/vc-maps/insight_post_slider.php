<?php

class WPBakeryShortCode_Insight_Post_Slider extends WPBakeryShortCode {
}

vc_map( array(
	'name'                      => esc_html__( 'Post Slider', 'tm-9studio' ),
	'base'                      => 'insight_post_slider',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'       => 'param_group',
			'heading'    => esc_html__( 'Slides', 'tm-9studio' ),
			'param_name' => 'slides',
			'params'     => array(
				array(
					'type'       => 'attach_image',
					'heading'    => 'Background image',
					'param_name' => 'slide_bg_image',
				),
				array(
					'type'        => 'ajax-search',
					'heading'     => esc_html__( 'Post', 'tm-9studio' ),
					'param_name'  => 'post_id',
					'ajax_get'    => 'post',
					'ajax_limit'  => 1,
					'admin_label' => true,
				),
			),
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'css' ),
	)
) );
