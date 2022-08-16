<?php
/**
 * Slider section
 */
if ( ! function_exists( 'wpazure_kit_upfrontwp_slider' ) ) :
	function wpazure_kit_upfrontwp_slider() {
		$HomeSliderEnabled = get_theme_mod('slider_section_enable',true);
		$HomeSliderImage = get_theme_mod('slider_image',WPAZURE_KIT_PLUGIN_URL .'inc/upfrontwp/images/slider/banner.jpg');
		$HomeSlideOverlay = get_theme_mod('slider_overlay',true);
		$HomeSlideOverlayColor = get_theme_mod('slider_overlay_color','0,0,0,0.30');
		$HomeSlideTitle = get_theme_mod('slider_title','It is a long established fact that a reader');
		$HomeSliderDesc = get_theme_mod('slider_discription','It is a long established fact that a reader .');
		$HomeSliderButtonTxt = get_theme_mod('slider_btn_txt','Read more');
		$HomeSliderButtonLink = get_theme_mod('slider_btn_link','#');
		$HomeSliderButtonTarget = get_theme_mod('slider_btn_target',true);
		
		?>
	
		<!-- MAIN SLIDER SECTION START -->
		<?php	if($HomeSliderEnabled==true){
					if(!empty($HomeSliderImage)){ ?>
					
					
					<div class="main-slider owl-carousel owl-drag">
					
						 <div class="item w-100 d-flex align-items-center" style="background-image: url(<?php echo esc_url($HomeSliderImage); ?>);">
							<div class="slider-overlay" <?php if($HomeSlideOverlay == true){?> style="background-color:<?php echo esc_attr($HomeSlideOverlayColor); ?>" <?php }?>></div>
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="slide-content">
										<?php if(!empty($HomeSlideTitle)){?>
											<h2 class="h1"><strong><?php echo $HomeSlideTitle;?></strong></h2>
										<?php } ?>
										<?php if(!empty($HomeSliderDesc)){?>
											<p><?php echo $HomeSliderDesc; ?></p>
										<?php }?>
										
										<?php if(!empty($HomeSliderButtonTxt)){?>
											<a class="site-button site-button-primary btn-hover btn-animation" href="<?php echo esc_url($HomeSliderButtonLink);?>" <?php if($HomeSliderButtonTarget== 'yes') {echo 'target="_blank"';}?>>
												<span class="btn-text" ><?php echo esc_html($HomeSliderButtonTxt);?></span>
											</a><?php }?>
											
										</div>
									</div>
								</div>
							</div>
			
						</div>
					
						
					
					</div>
					 <?php 
					}
				} ?>
		<!-- MAIN SLIDER SECTION END -->
		
		
	<?php }

endif;

if ( function_exists( 'wpazure_kit_upfrontwp_slider' ) ) {
	
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 10, 'wpazure_kit_upfrontwp_slider' );
add_action( 'upfrontwp_homepage_sections', 'wpazure_kit_upfrontwp_slider', absint( $homepage_section_priority ) );

}