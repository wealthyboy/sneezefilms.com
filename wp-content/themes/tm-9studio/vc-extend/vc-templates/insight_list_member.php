<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' insight-list-member';

$members = (array) vc_param_group_parse_atts( $members );
$uid     = uniqid( 'insight-list-member-' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>" id="<?php echo esc_attr( $uid ); ?>">
	<?php foreach ( $members as $member ) { ?>
        <div class="item">
			<?php if ( isset( $member['image'] ) && $member['image'] ) { ?>
                <div class="photo"><?php echo wp_get_attachment_image( $member['image'], 'full' ); ?></div>
			<?php } ?>
            <div class="info">
                <span class="name"><?php echo esc_html( $member['name'] ); ?></span>
                <span class="tagline nd-font"><?php echo esc_html( $member['tagline'] ); ?></span>
            </div>
        </div>
	<?php } ?>
</div>
