<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' ' . $align . ' color-' . $color . ' insight-title';

$title_text_class = '';
if ( $uppercase === 'yes' ) {
	$title_text_class .= ' text-uppercase';
}
$title_text_class .= ' font-' . $font_family;
$title_text_class .= ' font-' . $font_size;
if ( ! empty( $font_weight ) ) {
	$title_text_class .= ' ofw-' . $font_weight;
}
if ( ! empty( $font_style ) ) {
	$title_text_class .= ' ofs-' . $font_style;
}
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
	<?php if ( $sub_title_enable === 'yes' ) { ?>
        <div class="sub-title primary-color nd-font">
			<?php echo esc_html( $sub_title ); ?>
        </div>
	<?php } ?>
    <h2 class="main-title <?php echo esc_attr( $title_text_class ); ?>">
		<?php echo esc_html( $title ); ?>
    </h2>
	<?php if ( $description_enable === 'yes' ) { ?>
        <div class="title-desc">
			<?php echo esc_html( $description ); ?>
        </div>
	<?php } ?>
</div>
