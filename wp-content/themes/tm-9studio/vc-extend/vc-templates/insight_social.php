<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' insight-social';

$social_links_arr = $this->getSocialLinks( $atts );
if ( ! empty( $social_links_arr ) ) { ?>
    <ul class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
		<?php foreach ( $social_links_arr as $key => $link ) { ?>
            <li class="<?php echo esc_attr( $key ); ?> hint--top hint--bounce hint--success"
                aria-label="<?php echo ucfirst( esc_attr( $key ) ); ?>">
                <a href="<?php echo esc_url( $link ) ?>" target="_blank">
                    <i class="fa fa-<?php echo esc_attr( $key ); ?>"></i>
                </a>
            </li>
		<?php } ?>
    </ul>
<?php }

