<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass( $el_class ) . ' ' . vc_shortcode_custom_css_class( $css ) . ' insight-project-grid project-grid-style';

$projects = explode( ',', $projects );
$uid      = uniqid( 'insight-project-grid-' );
?>
<div class="<?php echo Insight_Helper::nice_class( $el_class ); ?>" id="<?php echo esc_attr( $uid ); ?>">
	<?php if ( is_array( $projects ) && ( count( $projects ) > 0 ) ) {
		$params       = array(
			'posts_per_page'      => 24,
			'post_type'           => 'ic_project',
			'ignore_sticky_posts' => 1,
			'post__in'            => $projects,
		);
		$project_loop = new WP_Query( $params );
		if ( $project_loop->have_posts() ) {
			echo '<div class="row">';
			while ( $project_loop->have_posts() ) {
				$project_loop->the_post();
				get_template_part( 'components/content', 'project-grid' );
			}
			echo '</div>';
		}
		wp_reset_postdata();
	} ?>
</div>