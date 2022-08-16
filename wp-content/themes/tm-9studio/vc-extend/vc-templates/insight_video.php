<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' insight-video ' . $style;

$poster_thumbnail = wp_get_attachment_image_src( $poster, 'full' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
	<?php
	echo '<a href="' . esc_url( $url ) . '" ' . ( $auto_play ? '' : 'data-poster="' . esc_url( $poster_thumbnail[0] ) . '"' ) . '>';
	echo wp_get_attachment_image( $poster, 'full' );
	if ( $time !== '' ) {
		echo '<span class="time">' . esc_html( $time ) . '</span>';
	}
	echo '</a>';
	?>
</div>
