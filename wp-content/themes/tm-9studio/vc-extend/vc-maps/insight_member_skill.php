<?php

class WPBakeryShortCode_Insight_Member_Skill extends WPBakeryShortCode {
}

vc_map( array(
	'name'                      => esc_html__( 'Member Skill', 'tm-9studio' ),
	'base'                      => 'insight_member_skill',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Title', 'tm-9studio' ),
			'description' => esc_html__( 'Use / to separate the lines', 'tm-9studio' ),
			'param_name'  => 'title',
			'value'       => esc_html__( 'There are/my skills', 'tm-9studio' ),
			'admin_label' => true,
		),
		array(
			'type'       => 'param_group',
			'heading'    => esc_html__( 'Skills', 'tm-9studio' ),
			'param_name' => 'skills',
			'params'     => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Name', 'tm-9studio' ),
					'param_name'  => 'name',
					'value'       => '',
					'admin_label' => true,
				),
				array(
					'type'        => 'number',
					'heading'     => esc_html__( 'Value', 'tm-9studio' ),
					'param_name'  => 'value',
					'value'       => 90,
					'min'         => 1,
					'max'         => 100,
					'step'        => 1,
					'suffix'      => '%',
					'admin_label' => true,
				),
			),
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'note' ),
	)
) );
