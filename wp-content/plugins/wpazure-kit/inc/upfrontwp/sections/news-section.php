<?php
/**
 * Testimonial section
 */
if ( ! function_exists( 'news_upfrontwp_section' ) ) :
	function news_upfrontwp_section() {
		
		// Get Service section data
		$HomeNewsEnable = get_theme_mod('home_new_section_enable',true);
		$HomeNewsSectionTitle = get_theme_mod('home_news_section_title','Recent Blog Posts');
		$HomeNewsSectionDes = get_theme_mod('home_news_section_discription','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		
	
		if($HomeNewsEnable == true){?>
		
		
		
		
		
		
		<!-- #Blog section -->
	<section class="section-padding blog-default bg-white">
		<div class="container">
			<div class="section-heading">
					<?php if(!empty($HomeNewsSectionTitle)){?>
							<h3><?php echo esc_html($HomeNewsSectionTitle);?></h3>
							<span></span>
					<?php }
				
				if(!empty($HomeNewsSectionDes)){?>
							<p>
								<?php echo esc_html($HomeNewsSectionDes);?>
							</p>
							<?php }?>
			</div>
			<div class="row">
			<?php 
				$args = array( 'post_type' => 'post','posts_per_page' => 3,'post__not_in'=>get_option("sticky_posts")) ; 	
						query_posts( $args );
						if(query_posts( $args ))
					{	
						while(have_posts()):the_post();
					{?>
					
					
					<div class="col-md-4 col-sm-4 col-xs-12">
		            <div class="post-wrapper">
					<div class="entry-meta">
		                        <?php  upfrontwp_posted_on();?>    
																
		                    </div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
		                <div class="post-img">
		                   <?php upfrontwp_post_thumbnail();?>
		                </div>
		                <div class="blog-inner">
		                	
		                    <div class="data-box">
		                    	
			                     <?php the_content(__('Read More','upfrontwp')); ?>
			                   
		                    </div>
		                    <div class="post-meta">
		                    	<div class="post-author d-block f-none">
		                            <i class="fa fa-tags"></i>
		                             <?php upfrontwp_all_categories();?>
		                        </div>
		                        <div class="post-author">
		                            
		                           <?php upfrontwp_posted_by();?>
		                        </div>
		                        <div class="post-comment">
		                            
		                            <?php upfrontwp_get_comments_number();?>
		                        </div>
		                        <div class="clearfix"></div>
		                    </div>
		                </div>
		            </div>
		        </div>
				
		        <?php }
					endwhile;
					}
					?>
		    </div>
		</div>
	</section>
	<!-- End of Blog -->
		
		
		
		
		
		<!-- BLOG SECTION END -->
		<?php 
		} 
	}

endif;

if ( function_exists( 'news_upfrontwp_section' ) ) {
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 20, 'news_upfrontwp_section' );
add_action( 'upfrontwp_homepage_sections', 'news_upfrontwp_section', absint( $homepage_section_priority ) );

}