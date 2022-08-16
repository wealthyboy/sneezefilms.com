<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' insight-video-button';
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
	<?php echo '<a href="' . esc_url( $url ) . '">&nbsp;</a>'; ?>
</div>
