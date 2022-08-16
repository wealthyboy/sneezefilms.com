<?php
/**
 * Testimonial section
 */
if ( ! function_exists( 'wpazure_kit_upfrontwp_woocommerce_front' ) ) :
	function wpazure_kit_upfrontwp_woocommerce_front() {
	if ( class_exists( 'WooCommerce' ) ) {
		
		// Get Service section data
		$HomeProductEnable = get_theme_mod('product_section_enable',true);
		$HomeProductTitle = get_theme_mod('product_section_title','Visit Our Products');
		$HomeProductDes = get_theme_mod('product_section_description','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		if($HomeProductEnable == true){
		?>	
		
		<!-- WOOCOMMERCE SECTION START -->
		<section class="section-padding product-section bg-white">
			<div class="container">
				
				
			<div class="section-heading">
						
						<?php if(!empty($HomeProductTitle)){?>
								<h3><?php echo esc_html($HomeProductTitle);?></h3>
								<span></span>
								<?php } if(!empty($HomeProductDes)){?>
								<p>
									<?php echo esc_html($HomeProductDes);?>
								</p>
								<?php }?>
						
						</div>
				
				
				<?php
				
				$args = array(
				'post_type' => 'product',
				'posts_per_page' => 3,
		);
		/* Exclude hidden products from the loop */
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'product_visibility',
				'field'    => 'name',
				'terms'    => 'exclude-from-catalog',
				'operator' => 'NOT IN',
				

			),
		);  ?>
				
			<div class="row">
				<?php $loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="col-md-4 col-12">
						<div class="wc-product-block-v1">
							<div class="wc-product-img">
								<?php the_post_thumbnail('shop_catalog'); 

								 if ( $product->is_on_sale() ) { ?>
									<div class="wc-onsale">Sale</div>
								 <?php } ?>
								
							</div>
							<div class="wc-product-content">
								<h5 class="wc-product-title">
									<a href="#">
										<?php echo the_title(); ?>
									</a>
								</h5>								 
								<?php echo $product->get_price_html(); ?>
							</div>
							<div class="wc-add-to-cart-btn">
								<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				<?php  wp_reset_postdata(); ?>
					
				</div>
		
					
				</div>
			</section>
	
		<!-- WOOCOMMERCE SECTION END --><?php 
	}
	}	
}

endif;

if ( function_exists( 'wpazure_kit_upfrontwp_woocommerce_front' ) ) {
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 16, 'wpazure_kit_upfrontwp_woocommerce_front' );
add_action( 'upfrontwp_homepage_sections', 'wpazure_kit_upfrontwp_woocommerce_front', absint( $homepage_section_priority ) );

}