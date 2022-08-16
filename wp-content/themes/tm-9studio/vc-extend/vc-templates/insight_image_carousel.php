<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' insight-image-carousel';

if ( $images === '' ) {
	return;
}

$images = explode( ',', $images );

$uid = uniqid( 'insight-image-carousel-' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>" id="<?php echo esc_attr( $uid ); ?>">
	<?php foreach ( $images as $attach_id ) { ?>
        <div class="insight-image-carousel-item">
            <a href="<?php echo esc_url( Insight_Helper::img_fullsize( $attach_id ) ) ?>">
                <img src="<?php echo esc_url( Insight_Helper::img_fullsize( $attach_id ) ) ?>"
                     alt="<?php esc_html_e( 'Image', 'tm-9studio' ); ?>"/>
            </a>
        </div>
	<?php } ?>
</div>
<script>
	jQuery( document ).ready( function( $ ) {
		$( '#<?php echo esc_attr( $uid ); ?>' ).slick( {
			infinite: true,
			slidesToShow: 1,
			<?php if ( $display_bullets === 'true' ) { ?>
			dots: true,
			<?php } else { ?>
			dots: false,
			<?php } ?>
			<?php if ( $display_arrows === 'true' ) { ?>
			arrows: true,
			<?php } else { ?>
			arrows: false,
			<?php } ?>
			<?php if ( $enable_autoplay === 'true' ) { ?>
			autoplay: true,
			<?php } else { ?>
			autoplay: false,
			<?php } ?>
		} );
		$( '#<?php echo esc_attr( $uid ); ?>' ).lightGallery( {
			selector: 'a',
			thumbnail: true,
			animateThumb: false,
			showThumbByDefault: false
		} );
	} );
</script>