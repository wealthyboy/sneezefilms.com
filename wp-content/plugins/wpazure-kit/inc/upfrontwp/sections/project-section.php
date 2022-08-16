<?php
/**
 * Project section
 */
if ( ! function_exists( 'wpazure_kit_upfrontwp_project' ) ) :
	function wpazure_kit_upfrontwp_project() {
	//Get section data	
	$HomeProjectEnabled = get_theme_mod('project_section_enable',true);
	$HomeProjectSectionTitle = get_theme_mod('project_section_title','Our Latest Work');
	$HomeProjectSectionDesc = get_theme_mod('project_section_description','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
	// Get project data
	$HomeProjectOneImage = get_theme_mod('project_image_one',WPAZURE_KIT_PLUGIN_URL .'inc/consultera/images/project/project1.jpg');
	$HomeProjectOneTitle = get_theme_mod('project_title_one','Creative Image');
	$HomeProjectOneDesc = get_theme_mod('project_desc_one','Lorem ipsum dolor sit amet, consectetur adipisicing elit..');
	
	$HomeProjectTwoImage = get_theme_mod('project_image_two',WPAZURE_KIT_PLUGIN_URL .'inc/consultera/images/project/project2.jpg');
	$HomeProjectTwoTitle = get_theme_mod('project_title_two','Awesome Illustration');
	$HomeProjectTwoDesc = get_theme_mod('project_desc_two','Lorem ipsum dolor sit amet, consectetur adipisicing elit..');
	
	$HomeProjectThreeImage = get_theme_mod('project_image_three',WPAZURE_KIT_PLUGIN_URL .'inc/consultera/images/project/project3.jpg');
	$HomeProjectThreeTitle = get_theme_mod('project_title_three','3D Model');
	$HomeProjectThreeDesc = get_theme_mod('project_desc_three','Lorem ipsum dolor sit amet, consectetur adipisicing elit..');
	
		if($HomeProjectEnabled == true){ ?>
		
		
		
		
		<section class="p-top-100 p-bottom-100 bg-white portfolio-section">
		<div class="container">
		<div class="section-heading">
			<?php if(!empty($HomeProjectSectionTitle)){?>
					<h3><?php echo esc_html($HomeProjectSectionTitle); ?></h3>
					<span></span>
					<?php } if(!empty($HomeProjectSectionDesc)){?>
					
					<p><?php echo esc_html($HomeProjectSectionDesc);?></p>
					<?php }?>
	       </div>

			<!-- Tab panes -->
			<div class="tab-content">
			  	<div role="tabpanel" class="tab-pane in active" id="menu1">
			  		<div class="portfolio-gallery row">
                        <div class="col-md-4 col-sm-6 col-12 animated fadeIn">
                            <div class="portfolio-grid">
                                <div class="portfolio-content">
								<?php if(!empty($HomeProjectOneImage)){?>
                                    <img src="<?php echo $HomeProjectOneImage;?>" alt="Portfolio" class="img-responsive example-image">
								<?php } ?>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info-inner">
                                          
											<?php if(!empty($HomeProjectOneTitle)){?>
                                            <h2 class="port-title" title="Perfect Design">
                                                <a href="#"><?php echo $HomeProjectOneTitle;?></a>
                                            </h2>
											<?php } 
											if(!empty($HomeProjectOneDesc)){?>
                                            <div class="author"><?php echo $HomeProjectOneDesc;?></div>
											<?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 animated fadeIn">
                            <div class="portfolio-grid">
                                <div class="portfolio-content">
								<?php if(!empty($HomeProjectTwoImage)){?>
                                    <img src="<?php echo $HomeProjectTwoImage;?>" alt="Portfolio" class="img-responsive example-image">
								<?php } ?>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info-inner">
                                           
											<?php if(!empty($HomeProjectTwoTitle)){?>
                                            <h2 class="port-title" title="Perfect Design">
                                                <a href="#"><?php echo $HomeProjectTwoTitle;?></a>
                                            </h2>
											<?php } 
											if(!empty($HomeProjectTwoDesc)){?>
                                            <div class="author"><?php echo $HomeProjectTwoDesc;?></div>
											<?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 animated fadeIn">
                            <div class="portfolio-grid">
                                <div class="portfolio-content">
								<?php if(!empty($HomeProjectThreeImage)){?>
                                    <img src="<?php echo $HomeProjectThreeImage;?>" alt="Portfolio" class="img-responsive example-image">
								<?php } ?>
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info-inner">
                                            
											<?php if(!empty($HomeProjectThreeTitle)){?>
                                            <h2 class="port-title" title="Perfect Design">
                                                <a href="#"><?php echo $HomeProjectThreeTitle;?></a>
                                            </h2>
											<?php } 
											if(!empty($HomeProjectThreeDesc)){?>
                                            <div class="author"><?php echo $HomeProjectThreeDesc;?></div>
											<?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        
                    </div>
			  	</div>
			 
			  	
			</div>
	</div>
	</section>
		
			<!-- PORTFOLIO SECTION END --><?php 
		}
	}

endif;

if ( function_exists( 'wpazure_kit_upfrontwp_project' ) ) {
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 14, 'wpazure_kit_upfrontwp_project' );
add_action( 'upfrontwp_homepage_sections', 'wpazure_kit_upfrontwp_project', absint( $homepage_section_priority ) );

}