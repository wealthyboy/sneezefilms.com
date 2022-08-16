<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class         = $this->getExtraClass( $el_class ) . ' insight-project-video';
$poster_thumbnail = wp_get_attachment_image_src( $poster, 'full' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
	<?php
	if ( is_singular( 'ic_project' ) ) {
		echo '<a href="' . esc_url( $url ) . '" data-poster="' . esc_url( $poster_thumbnail[0] ) . '">';
		echo wp_get_attachment_image( $poster, 'full' );
		if ( $time !== '' ) {
			echo '<span class="time">' . esc_html( $time ) . '</span>';
		}
		echo '</a>';
	} else {
		esc_html_e( 'This shortcode just for single project page.', 'tm-9studio' );
	}
	?>
</div>
