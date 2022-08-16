<?php

class WPBakeryShortCode_Insight_Social extends WPBakeryShortCode {
	public function getSocialLinks( $atts ) {
		$social_links     = preg_split( '/\s+/', $atts['social_links'] );
		$social_links_arr = array();

		foreach ( $social_links as $social ) {
			$pieces = explode( '|', $social );
			if ( count( $pieces ) == 2 ) {
				$key                      = $pieces[0];
				$link                     = $pieces[1];
				$social_links_arr[ $key ] = $link;
			}
		}

		return $social_links_arr;
	}
}

vc_map( array(
	'name'                      => esc_html__( 'Social', 'tm-9studio' ),
	'base'                      => 'insight_social',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'       => 'social_links',
			'heading'    => esc_html__( 'Social links', 'tm-9studio' ),
			'param_name' => 'social_links',
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'css' ),
		Insight_Helper::get_param( 'note' ),
	),
) );
