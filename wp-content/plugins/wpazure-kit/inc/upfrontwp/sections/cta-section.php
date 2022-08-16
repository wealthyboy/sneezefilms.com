<?php
/**
 * Slider section
 */
if ( ! function_exists( 'wpazure_kit_upfrontwp_cta' ) ) :
	function wpazure_kit_upfrontwp_cta() {
		$HomeCtaEnabled = get_theme_mod('cta_section_enable',true);
		$HomeCtaImage = get_theme_mod('cta_bg_image',WPAZURE_KIT_PLUGIN_URL .'inc/consultera/images/fun-facts.jpg');
		$HomeCtaOverlay = get_theme_mod('cta_overlay',true);
		$HomeCtaOverlayColor = get_theme_mod('cta_overlay_color','rgb(9,60,129,0.8)');
		$HomeCtaTitle = get_theme_mod('cta_title','It is a long established fact that a reader');
		$HomeCtaDesc = get_theme_mod('cta_discription','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.');
		$HomeCtaButtonTxt = get_theme_mod('cta_btn_txt','Contact Us');
		$HomeCtaButtonLink = get_theme_mod('cta_btn_link','#');
		$HomeCtaButtonTarget = get_theme_mod('cta_btn_target',true);
		
		if($HomeCtaEnabled==true){?>
		
		
		<!-- #CTA section -->
	<section class="cta-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-12 text-center">
					<?php if(!empty($HomeCtaTitle)){?>
								<h2><?php echo esc_html($HomeCtaTitle);?></h2>
								<?php } ?>
					<p>
						<?php echo $HomeCtaDesc;?>
					</p>
				</div>
				<?php if(!empty($HomeCtaButtonTxt)){?>
				<div class="col-12 mt-4">
					<p class="has-btn text-center">
						
							<a href="<?php echo esc_attr($HomeCtaButtonLink);?>" <?php if($HomeCtaButtonTarget == true){echo "target='_blank'";}?> class="site-button site-button-primary btn-hover btn-animation"> <span span class="btn-text"><?php echo $HomeCtaButtonTxt;?></span></a>
					
					</p>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- End of CTA -->
		<?php 
				
		} ?>
		
	<?php }

endif;

if ( function_exists( 'wpazure_kit_upfrontwp_cta' ) ) {
	
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 18, 'wpazure_kit_upfrontwp_cta' );
add_action( 'upfrontwp_homepage_sections', 'wpazure_kit_upfrontwp_cta', absint( $homepage_section_priority ) );

}