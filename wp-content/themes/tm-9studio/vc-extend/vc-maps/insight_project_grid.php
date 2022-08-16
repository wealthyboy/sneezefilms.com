<?php

class WPBakeryShortCode_Insight_Project_Grid extends WPBakeryShortCode {
}

vc_map( array(
	'name'                      => esc_html__( 'Project Grid', 'tm-9studio' ),
	'base'                      => 'insight_project_grid',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'ajax-search',
			'heading'     => esc_html__( 'Projects', 'tm-9studio' ),
			'param_name'  => 'projects',
			'ajax_get'    => 'ic_project',
			'ajax_limit'  => 24,
			'admin_label' => true,
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'css' ),
		Insight_Helper::get_param( 'note' ),
	)
) );
