<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' insight-menu-add-param';

$menu_add_param = (array) vc_param_group_parse_atts( $menu_add_param );

if ( empty( $menu_add_param ) ) {
	return;
}

$current_link = get_permalink();
$ic_cat       = '';
if ( isset( $_GET['category'] ) && ! empty( $_GET['category'] ) ) {
	$ic_cat = sanitize_key( $_GET['category'] );
}
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
    <ul>
		<?php foreach ( $menu_add_param as $key => $menu ) {
			$slug         = $menu['categories'];
			$category     = get_category_by_slug( $slug );
			$class_active = '';
			if ( $ic_cat == $slug ) {
				$class_active = 'active';
			}
			// Get icon
			$icon_html   = '';
			$custom_icon = ( isset( $menu['custom_icon'] ) ) ? $menu['custom_icon'] : '';
			extract( $menu );
			if ( $custom_icon != "" && $icon_type == "custom" ) {
				if ( is_numeric( $custom_icon ) ) {
					$custom_icon_src = wp_get_attachment_url( $custom_icon );
				} else {
					$custom_icon_src = $custom_icon;
				}
				$icon_html .= '<img src="' . esc_url( $custom_icon_src ) . '" alt="' . esc_html__( 'Image', 'tm-9studio' ) . '"/>';
			} else {
				$iconClass = isset( ${"icon_" . $icon_lib} ) ? esc_attr( ${"icon_" . $icon_lib} ) : 'ionic';
				$icon_html .= "<i class='" . $iconClass . "' ></i>";
			}
			?>
            <li><a class="<?php echo esc_attr( $class_active ) ?>"
                   href="<?php echo esc_attr( add_query_arg( array( 'category' => $slug ), $current_link ) ) ?>">
					<?php Insight_Helper::output( $icon_html ) ?>
                    <span><?php echo esc_html( $category->cat_name ) ?></span></a></li>
			<?php
		} ?>
    </ul>
</div>
