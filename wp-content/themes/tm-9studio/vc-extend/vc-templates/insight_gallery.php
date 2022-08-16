<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' ' . $style . ' insight-gallery insight-gallery-grid';

$categories = explode( ',', $categories );
$terms      = get_terms( 'ic_gallery_category', array(
	'slug'       => $categories,
	'hide_empty' => false,
) );

$all_active = 'active';
if ( isset( $categories_default ) && $categories_default !== '' ) {
	$all_active = '';
}
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
    <h2 class="display_none"><?php the_title() ?></h2>
    <div class="insight-gallery-filter nd-font">
        <ul data-option-key="filter">
            <li><a class="<?php echo esc_attr( $all_active ) ?>" href="#filter"
                   data-option-value=".insight-gallery-item"><?php esc_html_e( 'All', 'tm-9studio' ) ?></a></li>
			<?php foreach ( $categories as $key => $category ): ?>
				<?php foreach ( $terms as $key => $term ): ?>
					<?php if ( $category != $term->slug ) {
						continue;
					} ?>
                    <li><a class="<?php if ( isset( $categories_default ) && $term->slug == $categories_default ) {
							echo esc_attr( 'active' );
						} ?>" href="javascript:;"
                           data-option-value="<?php echo esc_attr( '.' . $term->slug ) ?>"><?php echo esc_html( $term->name ) ?></a>
                    </li>
				<?php endforeach; ?>
			<?php endforeach; ?>
        </ul>
    </div>
	<?php
	$paged     = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	$params    = array(
		'posts_per_page'      => $number,
		'post_type'           => 'ic_gallery',
		'ignore_sticky_posts' => 1,
		'orderby'             => $order_by,
		'order'               => $order,
		'tax_query'           => array(
			'relation' => 'or',
			array(
				'taxonomy' => 'ic_gallery_category',
				'field'    => 'slug',
				'terms'    => $categories,
			)
		),
		'paged'               => $paged
	);
	$the_query = new WP_Query( $params );
	if ( $the_query->have_posts() ) {
		?>
        <div class="insight-gallery-images row">
			<?php
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				Insight_Helper::$current_index = $the_query->current_post;
				get_template_part( 'components/content', $style );
			}
			?>
        </div>
		<?php
		Insight::paging_nav( $the_query );
		wp_reset_postdata();
	}
	?>
</div>
