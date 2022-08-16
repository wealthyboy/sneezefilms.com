<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$style = '';
$el_class = $this->getExtraClass( $el_class ) . ' insight-single-testimonial ' . $style;

$uid = uniqid( 'insight-single-testimonial-' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>" id="<?php echo esc_attr( $uid ); ?>">
    <div class="item">
		<?php if ( isset( $photo ) && $photo ) { ?>
            <div class="photo"><?php echo wp_get_attachment_image( $photo, 'full' ); ?></div>
		<?php } ?>
        <div class="text">
			<?php echo esc_html( $content ); ?>
        </div>
		<?php if ( isset( $sign ) && $sign ) { ?>
            <div class="sign"><?php echo wp_get_attachment_image( $sign, 'full' ); ?></div>
		<?php } ?>
        <div class="info">
            <div class="author">
                <span class="name"><?php echo esc_html( $name ); ?></span>
                <span class="tagline"><?php echo esc_html( $tagline ); ?></span>
            </div>
        </div>
    </div>
</div>
