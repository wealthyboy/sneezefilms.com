<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' insight-project-carousel';

$slides_to_display = 3;
$display_bullets   = 'true';
$display_arrows    = 'true';
$enable_autoplay   = 'true';

$projects = explode( ',', $projects );
$uid      = uniqid( 'insight-project-carousel-' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>" id="<?php echo esc_attr( $uid ); ?>">
	<?php if ( is_array( $projects ) && ( count( $projects ) > 0 ) ) {
		$params       = array(
			'posts_per_page'      => - 1,
			'post_type'           => 'ic_project',
			'ignore_sticky_posts' => 1,
			'post__in'            => $projects,
		);
		$project_loop = new WP_Query( $params );
		if ( $project_loop->have_posts() ) {
			while ( $project_loop->have_posts() ) {
				$project_loop->the_post();
				?>
                <div class="insight-project-carousel-item">
                    <div class="insight-project-carousel-item-inner">
						<?php the_post_thumbnail( 'full' ); ?>
                    </div>
                    <div class="info">
                        <div class="title nd-font">
                            <a href="<?php echo get_permalink(); ?>">
								<?php the_title(); ?>
                            </a>
                        </div>
						<?php
						$project_categories = wp_get_post_terms( get_the_ID(), 'ic_project_category', array( "fields" => "all" ) );
						if ( is_array( $project_categories ) && ( count( $project_categories ) > 0 ) ) {
							echo '<div class="category rd-font">';
							foreach ( $project_categories as $project_category ) {
								echo '<a href="' . get_term_link( $project_category ) . '">' . esc_html( $project_category->name ) . '</a>';
							}
							echo '</div>';
						}
						?>
                    </div>
                </div>
				<?php
			}
		}
		wp_reset_postdata();
	} ?>
</div>
<script>
	jQuery( document ).ready( function( $ ) {
		$( '#<?php echo esc_attr( $uid ); ?>' ).slick( {
			infinite: true,
			centerMode: true,
			variableWidth: true,
			slidesToShow: <?php echo esc_js( $slides_to_display ); ?>,
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
			<?php if ( $enable_autoplay === 'true' ) { ?>
			autoplay: true,
			<?php } else { ?>
			autoplay: false,
			<?php } ?>
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						centerMode: false,
						variableWidth: false,
					}
				}
			]
		} );
	} );
</script>
