<?php
/**
 * Slider section
 */
if ( ! function_exists( 'wpazure_kit_consultera_cta' ) ) :
	function wpazure_kit_consultera_cta() {
		$HomeCtaEnabled = get_theme_mod('cta_section_enable',true);
		//$HomeCtaImage = get_theme_mod('cta_bg_image',WPAZURE_KIT_PLUGIN_URL .'inc/consultera/images/fun-facts.jpg');
		$HomeCtaOverlay = get_theme_mod('cta_bg_color',true);
		$HomeCtaOverlayColor = get_theme_mod('cta_overlay_color','rgb(0,0,0,0.8)');
		$HomeCtaTitle = get_theme_mod('cta_title','It is a long established fact that a reader');
		$HomeCtaDesc = get_theme_mod('cta_discription','It is a long established fact that a reader .');
		$HomeCtaButtonTxt = get_theme_mod('cta_btn_txt','Contact Us');
		$HomeCtaButtonLink = get_theme_mod('cta_btn_link','#');
		$HomeCtaButtonTarget = get_theme_mod('cta_btn_target',true);
		
		if($HomeCtaEnabled==true){?>
		
		
		<section class="section-padding-100 child-cta">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="child-cta-wrapper">
						<?php if(!empty($HomeCtaTitle)){?>
							<h3>
								<?php echo esc_html($HomeCtaTitle);?>
							</h3>
							<?php } ?>
							<?php if(!empty($HomeCtaDesc)){?>
							<p class="text-center mt-3">
								<?php echo esc_html($HomeCtaDesc);?>
							</p>
							<?php }?>
							<p class="text-center mt-5">
							<a href="<?php echo esc_attr($HomeCtaButtonLink);?>" <?php if($HomeCtaButtonTarget == true){echo "target='_blank'";}?> class="default-button button-md bg-blue effect-1">
										<span class="btn-text"><?php echo esc_html($HomeCtaButtonTxt);?></span>
									</a>
							
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php 
				
		} ?>
		
	<?php }

endif;

if ( function_exists( 'wpazure_kit_consultera_cta' ) ) {
	
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 18, 'wpazure_kit_consultera_cta' );
add_action( 'consultera_homepage_sections', 'wpazure_kit_consultera_cta', absint( $homepage_section_priority ) );

}