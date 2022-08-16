<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if ( empty( $username ) ) {
	return;
}

$el_class    = $this->getExtraClass( $el_class ) . ' insight-instagram-feed';
$media_array = $this->scrape_instagram( $username, $number_items, 0 );
if ( is_wp_error( $media_array ) ) { ?>
    <div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
		<span class="error">
			<?php echo esc_html( $media_array->get_error_message() ); ?>
		</span>
    </div>
<?php } else { ?>
    <div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
		<?php if ( $title && ( $title !== '' ) ) { ?>
            <div class="insight-instagram-feed-title"><?php echo esc_html( $title ); ?></div>
		<?php } ?>
        <div class="insight-instagram-feed-items">
			<?php foreach ( $media_array as $item ) { ?>
                <div class="item">
                    <a href="<?php echo esc_url( $item['link'] ); ?>" target="_blank">
                        <img src="<?php echo esc_url( $item['thumbnail'] ); ?>" class="item-image"
                             alt="<?php esc_attr_e( 'Image', 'tm-9studio' ); ?>"/>
                    </a>
                </div>
			<?php } ?>
        </div>
    </div>
<?php }
