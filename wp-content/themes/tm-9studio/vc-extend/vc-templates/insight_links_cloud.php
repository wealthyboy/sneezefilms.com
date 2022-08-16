<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' insight-links-cloud';

$links_cloud = (array) vc_param_group_parse_atts( $links_cloud );
$uid         = uniqid( 'insight-links-cloud-' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>" id="<?php echo esc_attr( $uid ); ?>">
    <ul>
		<?php foreach ( $links_cloud as $link_cloud ) { ?>
            <li>
                <a href="<?php echo esc_html( $link_cloud['link'] ); ?>"
                   target="_blank"><?php echo esc_html( $link_cloud['title'] ); ?></a>
            </li>
		<?php } ?>
    </ul>
</div>
