<?php
/**
 * Testimonial section
 */
if ( ! function_exists( 'wpazure_kit_upfrontwp_testimonial' ) ) :
	function wpazure_kit_upfrontwp_testimonial() {
		
		// Get Service section data
		$HomeTestimonialBackground = get_theme_mod('testimonial_background_image',WPAZURE_KIT_PLUGIN_URL .'inc/upfrontwp/images/fun-facts.jpg');
		$HomeTestiEnable = get_theme_mod('testimonial_section_enable',true);
		$HomeTestiSectionTitle = get_theme_mod('testimonial_section_title','What Clients Say');
		$HomeTestiSectionDes = get_theme_mod('testimonial_section_description','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		// Get tesimonial one data
		$TestiOneImage = get_theme_mod('testimonial_image_one',WPAZURE_KIT_PLUGIN_URL .'inc/upfrontwp/images/testimonial/test1.jpg');
		$TestiOneName = get_theme_mod('testimonial_name_one','Petrik Johnson');
		$TestiOneDesi = get_theme_mod('testimonial_desi_one','CEO John Softwares');
		$TestiOneDes = get_theme_mod('testimonial_des_one','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		
		$TestiTwoImage = get_theme_mod('testimonial_image_two',WPAZURE_KIT_PLUGIN_URL .'inc/upfrontwp/images/testimonial/test2.jpg');
		$TestiTwoName = get_theme_mod('testimonial_name_two','Petrik Johnson');
		$TestiTwoDesi = get_theme_mod('testimonial_desi_two','CEO John Softwares');
		$TestiTwoDes = get_theme_mod('testimonial_des_two','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		
	
		if($HomeTestiEnable == true){?>
		
		
		
		<!-- #Testimonial section -->
	<section class="section-padding testimonial-area" style="background: url(<?php echo $HomeTestimonialBackground;?>) no-repeat fixed;	background-size: cover;">
		<div class="container">
			<div class="section-heading">
			<?php if(!empty($HomeTestiSectionTitle)){?>
								<h3 class="white-color"><?php echo esc_html($HomeTestiSectionTitle);?></h3>
				
				<span></span>
			<?php }?>
			</div>
			<div class="owl-carousel testimonial-slider1">
			<div class="row">
	            <div class="item col-md-6 col-12">
				<?php if(!empty($TestiOneDes)){?>
                	<div class="client-area arrow-box-3">
  						<?php echo $TestiOneDes;?>
  					</div>
				<?php } ?>
  					<div class="client-box">
  						<div class="client-info">
	  						
							<?php if(!empty($TestiOneImage)){?>
							<div class="clientimg">
										<img src="<?php echo esc_url($TestiOneImage);?>">
							</div>
										<?php }?>
	  							
	  				
	  						<div class="client-detail">
							<?php if(!empty($TestiOneName)){?>
	  							<h4><?php echo $TestiOneName;?></h4>
							<?php } 
							if(!empty($TestiOneDesi)){?>
	  							<span><?php echo $TestiOneDesi;?></span>
							<?php } ?>
	  						</div>
  						</div>
  					</div>
	            </div>
				
				
				<div class="item col-md-6 col-12">
				<?php if(!empty($TestiTwoDes)){?>
                	<div class="client-area arrow-box-3">
  						<?php echo $TestiTwoDes;?>
  					</div>
				<?php } ?>
  					<div class="client-box">
  						<div class="client-info">
	  						
							<?php if(!empty($TestiTwoImage)){?>
							<div class="clientimg">
										<img src="<?php echo esc_url($TestiTwoImage);?>">
							</div>
										<?php }?>
	  							
	  				
	  						<div class="client-detail">
							<?php if(!empty($TestiTwoName)){?>
	  							<h4><?php echo $TestiTwoName;?></h4>
							<?php } 
							if(!empty($TestiTwoDesi)){?>
	  							<span><?php echo $TestiTwoDesi;?></span>
							<?php } ?>
	  						</div>
  						</div>
  					</div>
	            </div>
				
				</div>
	           
		    </div>
		</div>
	</section>
	<!-- End of Testimonial -->
	<?php 
		} 
	}

endif;

if ( function_exists( 'wpazure_kit_upfrontwp_testimonial' ) ) {
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 16, 'wpazure_kit_upfrontwp_testimonial' );
add_action( 'upfrontwp_homepage_sections', 'wpazure_kit_upfrontwp_testimonial', absint( $homepage_section_priority ) );

}