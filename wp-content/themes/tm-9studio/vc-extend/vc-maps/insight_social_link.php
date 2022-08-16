<?php

class WPBakeryShortCode_Insight_Social_Link extends WPBakeryShortCode {
}

vc_map( array(
	'name'                      => esc_html__( 'Social Link', 'tm-9studio' ),
	'base'                      => 'insight_social_link',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'       => 'param_group',
			'heading'    => esc_html__( 'Socials', 'tm-9studio' ),
			'param_name' => 'socials',
			'params'     => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Icon library', 'tm-9studio' ),
					'value'       => array(
						esc_html__( 'Font Awesome', 'tm-9studio' ) => 'fontawesome',
					),
					'param_name'  => 'icon_lib',
					'description' => esc_html__( 'Select icon library.', 'tm-9studio' ),
					'dependency'  => array( 'element' => 'icon_type', 'value' => array( 'custom' ) ),
				),
				Insight_Helper::fonticon( 'fontawesome' ),
				array(
					'type'        => 'vc_link',
					'heading'     => esc_html__( 'Link', 'tm-9studio' ),
					'param_name'  => 'link',
					'admin_label' => true,
				),
			),
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'note' ),
	)
) );
