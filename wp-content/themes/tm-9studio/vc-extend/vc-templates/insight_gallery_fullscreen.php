<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' insight-gallery-fullscreen';

if ( $images === '' ) {
	return;
}

$images = explode( ',', $images );
$count  = 1;
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
	<?php foreach ( $images as $attach_id ) { ?>
        <div
                class="insight-gallery-fullscreen-item <?php echo esc_attr( 'insight-gallery-fullscreen-item-' . $count ); ?>">
            <div class="insight-gallery-fullscreen-item-inner"
                 style="background-image: url('<?php echo esc_url( Insight_Helper::img_fullsize( $attach_id ) ); ?>');">
                <a href="<?php echo esc_url( Insight_Helper::img_fullsize( $attach_id ) ); ?>">
                    <img src="<?php echo esc_url( Insight_Helper::img_fullsize( $attach_id ) ); ?>"/>
                </a>
            </div>
        </div>
		<?php
		$count ++;
	} ?>
</div>