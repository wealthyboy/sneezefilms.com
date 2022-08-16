<?php

class WPBakeryShortCode_Insight_Gallery_FullScreen extends WPBakeryShortCode {
}

vc_map( array(
	'name'                      => esc_html__( 'Gallery Full Screen', 'tm-9studio' ),
	'base'                      => 'insight_gallery_fullscreen',
	'category'                  => INSIGHT_SHORTCODE_CATEGORY,
	'icon'                      => 'tm-shortcode-ico default-icon',
	'allowed_container_element' => 'vc_row',
	'params'                    => array(
		array(
			'type'        => 'attach_images',
			'heading'     => esc_html__( 'Images', 'tm-9studio' ),
			'description' => esc_html__( 'Just choose 4 images.', 'tm-9studio' ),
			'param_name'  => 'images',
			'admin_label' => true,
		),
		Insight_Helper::get_param( 'el_class' ),
		Insight_Helper::get_param( 'note' ),
	)
) );
