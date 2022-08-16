<?php

class WPBakeryShortCode_Insight_Video_Button extends WPBakeryShortCode {
}

vc_map( array(
	'name'     => esc_html__( 'Video Button', 'tm-9studio' ),
	'base'     => 'insight_video_button',
	'category' => INSIGHT_SHORTCODE_CATEGORY,
	'icon'     => 'tm-shortcode-ico default-icon',
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Video URL', 'tm-9studio' ),
			'admin_label' => true,
			'param_name'  => 'url',
			'description' => esc_html__( 'Enter your video url (Youtube/Vimeo) here', 'tm-9studio' ),
			'value'       => 'http://vimeo.com/92033601',
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'note' ),
	),
) );
