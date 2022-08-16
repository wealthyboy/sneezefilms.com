<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' insight-member';

$socials = (array) vc_param_group_parse_atts( $socials );
if ( count( $socials ) > 0 ) {
	?>
    <div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
        <div class="insight-member-inner">
            <div class="insight-member-inner--image">
				<?php echo wp_get_attachment_image( $image, 'full' ); ?>
            </div>
            <div class="insight-member-inner--name">
				<?php echo esc_html( $name ); ?>
            </div>
            <div class="insight-member-inner--info">
                <div class="insight-member-inner--tagline">
					<?php echo esc_html( $tagline ); ?>
                </div>
                <div class="insight-member-inner--socials">
					<?php foreach ( $socials as $social ) {
						// Get icon
						$icon_class = isset( $social[ 'icon_' . $social['icon_lib'] ] ) ? esc_attr( $social[ 'icon_' . $social['icon_lib'] ] ) : 'icon-default';
						// Get link
						$link        = vc_build_link( $social['link'] );
						$link_url    = ( isset( $link['url'] ) && ( $link['url'] !== '' ) ) ? $link['url'] : '#';
						$link_text   = ( isset( $link['title'] ) && ( $link['title'] !== '' ) ) ? $link['title'] : esc_html__( 'Click Me', 'tm-9studio' );
						$link_target = ( isset( $link['target'] ) && ( $link['target'] !== '' ) ) ? $link['target'] : '_self';
						$link_rel    = ( isset( $link['rel'] ) && ( $link['rel'] !== '' ) ) ? $link['rel'] : 'nofollow';
						echo '<a href="' . esc_url( $link_url ) . '" title="' . esc_attr( $link_text ) . '" target="' . esc_attr( $link_target ) . '" rel="' . esc_attr( $link_rel ) . '"><i class="' . esc_attr( $icon_class ) . '"></i><span>' . esc_html( $link_text ) . '</span></a>';
					} ?>
                </div>
            </div>
        </div>
    </div>
<?php }
