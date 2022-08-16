<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' insight-project-justified';

$terms = get_terms( 'ic_project_category', array(
	'slug' => explode( ',', $categories ),
) );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>">
	<?php
	$params    = array(
		'posts_per_page'      => $number,
		'post_type'           => 'ic_project',
		'ignore_sticky_posts' => 1,
		'tax_query'           => array(
			'relation' => 'or',
			array(
				'taxonomy' => 'ic_project_category',
				'field'    => 'slug',
				'terms'    => explode( ',', $categories ),
			)
		),
	);
	$loop      = new WP_Query( $params );
	$thumb_arr = array(
		'insight-project-justified01',
		'insight-project-justified02',
		'insight-project-justified03',
		'insight-project-justified04',
		'insight-project-justified05'
	);
	if ( $loop->have_posts() ) {
		$i = 1;
		echo '<div class="insight-project-justified-items items">';
		while ( $loop->have_posts() ) {
			$loop->the_post();
			?>
            <div class="insight-project-justified-item item item-<?php echo esc_attr( $i ); ?>">
                <div class="item-inner">
                    <div class="thumb">
                        <a href="<?php echo get_permalink(); ?>">
							<?php the_post_thumbnail( $thumb_arr[ array_rand( $thumb_arr ) ] ); ?>
                        </a>
                    </div>
                    <div class="title">
                        <a href="<?php echo get_permalink(); ?>">
							<?php the_title(); ?>
                        </a>
                    </div>
                </div>
            </div>
			<?php
			$i ++;
		}
		wp_reset_postdata();
		echo '</div>';
	}
	?>
</div>
