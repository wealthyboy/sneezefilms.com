<?php

class WPBakeryShortCode_Insight_Member_Info extends WPBakeryShortCode {
}

vc_map( array(
	'name'                      => esc_html__( 'Member Info', 'tm-9studio' ),
	'base'                      => 'insight_member_info',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'       => 'param_group',
			'heading'    => esc_html__( 'Info', 'tm-9studio' ),
			'param_name' => 'info',
			'params'     => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Name', 'tm-9studio' ),
					'param_name'  => 'name',
					'value'       => '',
					'admin_label' => true,
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Value', 'tm-9studio' ),
					'param_name'  => 'value',
					'value'       => '',
					'admin_label' => true,
				),
			),
		),
		array(
			'type'       => 'param_group',
			'heading'    => esc_html__( 'Socials', 'tm-9studio' ),
			'param_name' => 'socials',
			'params'     => array(
				Insight_Helper::fonticon( 'fontawesome' ),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Link', 'tm-9studio' ),
					'param_name'  => 'link',
					'value'       => '',
					'admin_label' => true,
				),
			),
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'note' ),
	)
) );
