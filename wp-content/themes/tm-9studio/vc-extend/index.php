<?php

if ( class_exists( 'Insight_FontIcon' ) ) {
	new Insight_FontIcon();
}

// Extend VC
add_action( 'init', 'insight_vc_extend', 10 );
function insight_vc_extend() {
	// Load params
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-params/datetime-picker.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-params/gradient.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-params/image-radio.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-params/number.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-params/social-links.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-params/toggle.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-params/ajax-search.php';

	// Load maps
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_blog_carousel.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_carousel.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_testimonial.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_single_testimonial.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_hire_box.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_member_info.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_member_skill.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_button.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_our_services.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_our_services_list.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_home_services.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_home_blog.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_video.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_video_button.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_gallery_carousel.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_gallery_fullscreen.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_image_carousel.php';

	// Team
	if ( post_type_exists( 'ic_our_team' ) ) {
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_member.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_team_filter.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_team_carousel.php';
	}

	// Gallery
	if ( post_type_exists( 'ic_gallery' ) ) {
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_gallery.php';
	}

	// Project
	if ( post_type_exists( 'ic_project' ) ) {
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_title.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_info.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_video.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_related.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_comment.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_grid.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_masonry.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_justified.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_filter.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_featured.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_project_carousel.php';
		require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_one_page.php';
	}

	// Others
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_gmaps.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_icon_boxes.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_list_member.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_title.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_links_cloud.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_social.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_social_link.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_menu_add_param.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_post_slider.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/insight_instagram_feed.php';
	require_once INSIGHT_THEME_DIR . '/vc-extend/vc-maps/vc_custom_heading.php';
}

// Change vc_templates dir
vc_set_shortcodes_templates_dir( INSIGHT_THEME_DIR . '/vc-extend/vc-templates' );

add_action( 'admin_head', 'insight_load_libs_for_vc_param' );
function insight_load_libs_for_vc_param() {
	// Style of all
	wp_enqueue_style( 'is-visual-composer', INSIGHT_THEME_URI . '/assets/admin/css/visual-composer.css' );
	wp_enqueue_style( 'balloon', INSIGHT_THEME_URI . '/assets/admin/css/balloon.min.css' );

	// Gradient param
	wp_enqueue_style( 'is-classygradient', INSIGHT_THEME_URI . '/assets/admin/libs/classygradient/dist/jquery-classygradient-min.css' );
	wp_enqueue_style( 'is-colorpicker', INSIGHT_THEME_URI . '/assets/admin/libs/colorpicker/dist/jquery-colorpicker.css' );

	// Add icon-font
	wp_enqueue_style( 'ionicons', INSIGHT_THEME_URI . '/assets/libs/ionicons/css/ionicons.min.css' );
	wp_enqueue_style( 'font-9studio', INSIGHT_THEME_URI . '/assets/libs/9studio/9studio.css' );

	wp_enqueue_script( 'is-colorpicker', INSIGHT_THEME_URI . '/assets/admin/libs/colorpicker/dist/jquery-colorpicker.js', array( 'jquery' ), INSIGHT_THEME_VERSION, true );
	wp_enqueue_script( 'is-classygradient', INSIGHT_THEME_URI . '/assets/admin/libs/classygradient/dist/jquery-classygradient-min.js', array( 'jquery' ), INSIGHT_THEME_VERSION, true );
}

add_action( 'vc_after_init', 'insight_set_use_theme_fonts_default', 'load' );
function insight_set_use_theme_fonts_default() {
	// Get current values stored in the color param in "Call to Action" element
	$param_use_theme_fonts = WPBMap::getParam( 'vc_custom_heading', 'use_theme_fonts' );
	// Append new value to the 'value' array
	$param_use_theme_fonts['std'] = 'yes';
	// Finally "mutate" param with new values
	vc_update_shortcode_param( 'vc_custom_heading', $param_use_theme_fonts );
}

add_filter( 'excerpt_more', 'insight_wpdocs_excerpt_more' );
function insight_wpdocs_excerpt_more( $more ) {
	return '...';
}
