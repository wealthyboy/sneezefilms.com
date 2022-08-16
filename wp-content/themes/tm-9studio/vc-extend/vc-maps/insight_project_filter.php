<?php

class WPBakeryShortCode_Insight_Project_Filter extends WPBakeryShortCode {
}

vc_map( array(
	'name'                      => esc_html__( 'Project Filter', 'tm-9studio' ),
	'base'                      => 'insight_project_filter',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		Insight_Helper::get_param( 'project_categories' ),
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
			'max'        => 12,
			'suffix'     => esc_html__( 'Number of project', 'tm-9studio' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Filter position', 'tm-9studio' ),
			'param_name'  => 'position',
			'std'         => 'left',
			'value'       => array(
				'Left' => 'left',
				'Top'  => 'top',
			),
			'save_always' => true,
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'note' ),
	)
) );
