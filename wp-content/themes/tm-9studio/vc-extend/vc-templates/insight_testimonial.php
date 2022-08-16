<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' insight-testimonials ' . $style;

$testimonials = (array) vc_param_group_parse_atts( $testimonials );
$uid          = uniqid( 'insight-testimonials-' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>" id="<?php echo esc_attr( $uid ); ?>">
	<?php foreach ( $testimonials as $testimonial ) { ?>
        <div class="item">
			<?php if ( isset( $testimonial['photo'] ) && $testimonial['photo'] ) { ?>
                <div class="photo"><?php echo wp_get_attachment_image( $testimonial['photo'], 'full' ); ?></div>
			<?php } ?>
			<?php if ( isset( $testimonial['title'] ) && ! empty( $testimonial['title'] ) ): ?>
                <h4 class="title">
					<?php echo esc_html( $testimonial['title'] ); ?>
                </h4>
			<?php endif; ?>
            <div class="text <?php if ( $style === 'style-01' ) {
				echo esc_attr( 'nd-font' );
			} ?> ">
				<?php echo esc_html( $testimonial['content'] ); ?>
            </div>
            <div class="info">
                <div class="author">
                    <span class="name"><?php echo esc_html( $testimonial['name'] ); ?></span>
                    <span class="tagline"><?php echo esc_html( $testimonial['tagline'] ); ?></span>
                </div>
            </div>
        </div>
	<?php } ?>
</div>
<script>
	jQuery( document ).ready( function( $ ) {
		$( "#<?php echo esc_attr( $uid ); ?>" ).slick( {
			slidesToShow: <?php echo esc_js( $slides_to_display ); ?>,
			slidesToScroll: <?php echo esc_js( $slides_to_display ); ?>,
			<?php if ( $enable_autoplay === 'true' ) { ?>
			autoplay: true,
			<?php } else { ?>
			autoplay: false,
			<?php } ?>
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
			infinite: true,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		} );
	} );
</script>
