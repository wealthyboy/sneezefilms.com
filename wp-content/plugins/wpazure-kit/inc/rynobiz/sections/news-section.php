<?php
/**
 * Testimonial section
 */
if ( ! function_exists( 'news_consultera_section' ) ) :
	function news_consultera_section() {
		
		// Get Service section data
		$HomeNewsEnable = get_theme_mod('home_new_section_enable',true);
		$HomeNewsSectionTitle = get_theme_mod('home_news_section_title','Recent Blog Posts');
		$HomeNewsSectionDes = get_theme_mod('home_news_section_discription','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		
	
		if($HomeNewsEnable == true){?>
		<!-- BLOG SECTION START -->
		<section class="section-padding-100 blog bg-white">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-12">
						<div class="section-heading text-center">
							<?php if(!empty($HomeNewsSectionTitle)){?>
							<h2 class="title"><?php echo esc_html($HomeNewsSectionTitle);?></h2>
							<?php } if(!empty($HomeNewsSectionDes)){?>
							<p>
								<?php echo esc_html($HomeNewsSectionDes);?>
							</p>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="row"> <?php 
				$args = array( 'post_type' => 'post','posts_per_page' => 3,'post__not_in'=>get_option("sticky_posts")) ; 	
						query_posts( $args );
						if(query_posts( $args ))
					{	
				$j =1;
				$i = 1;
						while(have_posts()):the_post();
					{?>
					
					<?php if($j==1){ ?>
					<div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0">
		                <div class="ce-post-wrapper post-overlay mb-sm-0 mb-4">
						<?php if(has_post_thumbnail()){?>
		                	<div class="post-thumb h-600">
		                		<?php consultera_post_thumbnail();?>
		                	</div>
						<?php } ?>
		                	<div class="post-info">
		                		<div class="post-meta entry-meta">
		                			<?php consultera_all_categories(); ?>
		                		</div>
		                		<h4 class="post-title entry-title">
		                			<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		                		</h4>
		                		<div class="post-meta entry-meta">
		                			<ul>
												<?php consultera_posted_by();
												consultera_get_comments_number();
												consultera_posted_on(); ?>
											</ul>
		                		</div>
		                	</div>
		                </div>
		            </div>
					<?php $j = $j+1; } else {
					?>
					<?php if($i == 1){
						$i = 2;?>
		            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
		                <div class="row">
					<?php }?>
		                	<div class="col-12 p-0">
		                		<div class="ce-post-wrapper post-overlay mb-sm-0 mb-4">
				                	<div class="post-thumb h-300">
				                		<?php consultera_post_thumbnail();?>
				                	</div>
				                	<div class="post-info">
				                		<div class="post-meta entry-meta">
				                			<?php consultera_all_categories();?>
				                		</div>
				                		<h4 class="post-title entry-title">
				                			<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
				                		</h4>
				                		<div class="post-meta entry-meta">
				                			<ul>
												<?php consultera_posted_by();
												consultera_get_comments_number();
												consultera_posted_on(); ?>
											</ul>
				                		</div>
				                	</div>
				                </div>
		                	</div>
		                
					<?php 
					
					//$i = 2;
					//}?>
					
					<?php } }
					endwhile;
					}
					?>
				</div>
		</section>
		<style>
			.child-layout.layout-2 .ce-post-wrapper .post-info{
				position: absolute;
				bottom: 0%;
				left: 50%;
				transform: translate(-50%,8%);
				z-index: 3;
				width: 100%;
				padding: 25px;
			}
		</style
		<!-- BLOG SECTION END -->
		<?php 
		} 
	}

endif;

if ( function_exists( 'news_consultera_section' ) ) {
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 20, 'news_consultera_section' );
add_action( 'consultera_homepage_sections', 'news_consultera_section', absint( $homepage_section_priority ) );

}