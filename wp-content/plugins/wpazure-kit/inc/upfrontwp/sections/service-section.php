<?php
/**
 * Service section
 */
if ( ! function_exists( 'wpazure_kit_upfrontwp_service' ) ) :
	function wpazure_kit_upfrontwp_service() {
		// Get Service section data
		$HomeServiceEnabled = get_theme_mod('service_section_enable',true);
		$HomeServiceSectionTitle = get_theme_mod('service_section_title','Featured Services');
		$HomeServiceSectionDesc = get_theme_mod('service_section_discription','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		
		// Get Service one data
		$HomeServiceOneIcon = get_theme_mod('service_one_icon',WPAZURE_KIT_PLUGIN_URL .'inc/upfrontwp/images/services/service-1.jpg');
		$HomeServiceOneTitle = get_theme_mod('service_one_title','Market Analysis');
		$HomeServiceOneDesc = get_theme_mod('service_one_desc','laoreet Pellentesque molestie laoreet laoreet.');
		$HomeServiceOneButtonText = get_theme_mod('service_one_btn_text','Read more');
		$HomeServiceOneButtonLink = get_theme_mod('service_one_btn_link','#');
		$HomeServiceOneButtonTarget = get_theme_mod('service_one_btn_tab',false);
		
		// Get Service Two data
		$HomeServiceTwoIcon = get_theme_mod('service_two_icon',WPAZURE_KIT_PLUGIN_URL .'inc/upfrontwp/images/services/service-2.jpg');
		$HomeServiceTwoTitle = get_theme_mod('service_two_title','Growth strategies');
		$HomeServiceTwoDesc = get_theme_mod('service_two_desc','laoreet Pellentesque molestie laoreet laoreet.');
		$HomeServiceTwoButtonText = get_theme_mod('service_two_btn_text','Read more');
		$HomeServiceTwoButtonLink = get_theme_mod('service_two_btn_link','#');
		$HomeServiceTwoButtonTarget = get_theme_mod('service_two_btn_tab',false);
		
		// Get Service Three data
		$HomeServiceThreeIcon = get_theme_mod('service_three_icon',WPAZURE_KIT_PLUGIN_URL .'inc/upfrontwp/images/services/service-3.jpg');
		$HomeServiceThreeTitle = get_theme_mod('service_three_title','Employee Benefits');
		$HomeServiceThreeDesc = get_theme_mod('service_three_desc','laoreet Pellentesque molestie laoreet laoreet.');
		$HomeServiceThreeButtonText = get_theme_mod('service_three_btn_text','Read more');
		$HomeServiceThreeButtonLink = get_theme_mod('service_three_btn_link','#');
		$HomeServiceThreeButtonTarget = get_theme_mod('service_three_btn_tab',false);
		
	?>
	
	<!-- SERVICES SECTION START --><?php
	if($HomeServiceEnabled==true){ ?>
	
		<section class="service-with-image section-padding bg-light-grey">
			<div class="container">
			<?php if(!empty($HomeServiceSectionTitle) || !empty($HomeServiceSectionDesc)){?>
				<div class="section-heading">
					
						<?php if(!empty($HomeServiceSectionTitle)){?>
							<h3 class="title"><?php echo $HomeServiceSectionTitle;?></h3>
							<span></span>
						<?php } if(!empty($HomeServiceSectionDesc)){?>
							<p>
								<?php echo $HomeServiceSectionDesc;?>
							</p>
						<?php }?>
						</div>
				
				
			<?php }?>
				
				<div class="row" id="service-content"> 
				
							
							
				<div class="col-md-4 col-12 m-b-xs-30 m-b-sm-30">
					<div class="service-block">
						<?php if($HomeServiceOneIcon !=''){?>
						<div class="ovrly-img-block"> 
							<img alt="Our Services" src="<?php echo esc_attr($HomeServiceOneIcon);?>" />
						</div>
						<?php }?>
						<div class="details">
							<div class="number alt-font"><?php echo 1;?></div>
						<?php if(!empty($HomeServiceOneTitle)){?>
									<h2><?php echo esc_html($HomeServiceOneTitle);?></h2>
								<?php } if(!empty($HomeServiceOneDesc)){?>
									<p>
										<?php echo esc_html($HomeServiceOneDesc);?>
									</p>
								<?php }  if(!empty($HomeServiceOneButtonText)){?>
								
									<a href="<?php echo esc_attr($HomeServiceOneButtonLink); ?>" <?php  if($HomeServiceOneButtonTarget == true){echo "target='_blank'";}?> class="read-more"><?php echo esc_html($HomeServiceOneButtonText);?></a>
								<?php }?>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-12 m-b-xs-30 m-b-sm-30">
					<div class="service-block">
						<?php if($HomeServiceTwoIcon !=''){?>
						<div class="ovrly-img-block"> 
							<img alt="Our Services" src="<?php echo esc_attr($HomeServiceTwoIcon);?>" />
						</div>
						<?php }?>
						<div class="details">
							<div class="number alt-font"><?php echo 2;?></div>
						<?php if(!empty($HomeServiceTwoTitle)){?>
									<h2><?php echo esc_html($HomeServiceTwoTitle);?></h2>
								<?php } if(!empty($HomeServiceTwoDesc)){?>
									<p>
										<?php echo esc_html($HomeServiceTwoDesc);?>
									</p>
								<?php }  if(!empty($HomeServiceTwoButtonText)){?>
								
									<a href="<?php echo esc_attr($HomeServiceTwoButtonLink); ?>" <?php  if($HomeServiceTwoButtonTarget == true){echo "target='_blank'";}?> class="read-more"><?php echo esc_html($HomeServiceTwoButtonText);?></a>
								<?php }?>
						</div>
					</div>
				</div>
				
				
				<div class="col-md-4 col-12 m-b-xs-30 m-b-sm-30">
					<div class="service-block">
						<?php if($HomeServiceThreeIcon !=''){?>
						<div class="ovrly-img-block"> 
							<img alt="Our Services" src="<?php echo esc_attr($HomeServiceThreeIcon);?>" />
						</div>
						<?php }?>
						<div class="details">
							<div class="number alt-font"><?php echo 3;?></div>
						<?php if(!empty($HomeServiceThreeTitle)){?>
									<h2><?php echo esc_html($HomeServiceThreeTitle);?></h2>
								<?php } if(!empty($HomeServiceThreeDesc)){?>
									<p>
										<?php echo esc_html($HomeServiceThreeDesc);?>
									</p>
								<?php }  if(!empty($HomeServiceThreeButtonText)){?>
								
									<a href="<?php echo esc_attr($HomeServiceThreeButtonLink); ?>" <?php  if($HomeServiceThreeButtonTarget == true){echo "target='_blank'";}?> class="read-more"><?php echo esc_html($HomeServiceThreeButtonText);?></a>
								<?php }?>
						</div>
					</div>
				</div>
					
					

				</div>
				
</div>
		</section><?php 
	}
		?>
		<!-- SERVICES SECTION END -->
		
		
	<?php }

endif;

if ( function_exists( 'wpazure_kit_upfrontwp_service' ) ) {
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 12, 'wpazure_kit_upfrontwp_service' );
add_action( 'upfrontwp_homepage_sections', 'wpazure_kit_upfrontwp_service', absint( $homepage_section_priority ) );

}