<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' insight-carousel';

if ( $images === '' ) {
	return;
}

$images = explode( ',', $images );
$i      = - 1;

$data_slick = array();

if ( $dots === 'yes' ) {
	$data_slick['dots'] = true;
}
if ( $autoplay === 'yes' ) {
	$data_slick['autoplay'] = true;
}
$data_slick['arrows'] = true;

$data_slick['slidesToShow']   = (int) $slides_per_row;
$data_slick['slidesToScroll'] = (int) $slides_per_row;
$data_slick['responsive']     = array(
	array(
		'breakpoint' => 480,
		'settings'   => array(
			'slidesToShow'   => 2,
			'slidesToScroll' => 2
		)
	),
);

$carousel_json = json_encode( $data_slick );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>"
     data-slick="<?php echo htmlspecialchars( $carousel_json, ENT_QUOTES, "UTF-8" ); ?>">
	<?php foreach ( $images as $attach_id ) {
		$i ++;
		if ( $attach_id > 0 ) {
			if ( $custom_image_size === 'yes' ) {
				$image = Insight_Helper::img_fullsize( $attach_id );
			} else {
				$image = Insight_Helper::img_fullsize( $attach_id );
			}
		} else {
			continue;
		}
		?>
        <div class="insight-carousel--slide">
            <img src="<?php echo esc_url( $image ); ?>" alt="<?php esc_html_e( 'Image', 'tm-9studio' ); ?>"/>
        </div>
	<?php } ?>
</div>
