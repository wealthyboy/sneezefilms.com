<?php
/**
 * Slider section
 */
if ( ! function_exists( 'wpazure_kit_consultera_social' ) ) :
	function wpazure_kit_consultera_social() {
		$HomeSocialEnabled = get_theme_mod('social_section_enable',true);
		
		$SocialFacebookUrl = get_theme_mod('home_social_facebook_url','#');
		$SocialTwitterUrl = get_theme_mod('home_social_twitter_url','#');
		$SocialLinkedinUrl = get_theme_mod('home_social_linkedin_url','#');
		$SocialYoutubeUrl = get_theme_mod('home_social_youtube_url','#');
		$SocialInstagramUrl = get_theme_mod('home_social_instagram_url','#');
		$SocialpinterestUrl = get_theme_mod('home_social_pinterest_url','#');
		
		
		if($HomeSocialEnabled==true){?>
			<section class="social-media-section">
			<div class="container-fluid">
				<div class="row">
				<?php if(!empty($SocialFacebookUrl)){?>
					<div class="col social-block">
						<a href="<?php echo $SocialFacebookUrl; ?>" class="fbb">
							<div>
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</div>
							<div>
								Facebook
							</div>
						</a>
					</div>
				<?php } if(!empty($SocialTwitterUrl)){?>
					<div class="col social-block">
						<a href="<?php echo $SocialTwitterUrl; ?>" class="tww">
							<div>
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</div>
							<div>
								Twitter
							</div>
						</a>
					</div>
				<?php } if(!empty($SocialLinkedinUrl)){?>
					<div class="col social-block">
						<a href="<?php echo $SocialLinkedinUrl; ?>" class="lin">
							<div>
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</div>
							<div>
								LinkedIn
							</div>
						</a>
					</div>
				<?php } if(!empty($SocialYoutubeUrl)){?>
					<div class="col social-block">
						<a href="<?php echo $SocialYoutubeUrl; ?>" class="ytb">
							<div>
								<i class="fa fa-youtube-play" aria-hidden="true"></i>
							</div>
							<div>
								YouTube
							</div>
						</a>
					</div>
				<?php } if(!empty($SocialInstagramUrl)){?>
					<div class="col social-block">
						<a href="<?php echo $SocialInstagramUrl; ?>" class="ins">
							<div>
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</div>
							<div>
								Instagram
							</div>
						</a>
					</div>
				<?php } if(!empty($SocialpinterestUrl)){?>
					<div class="col social-block">
						<a href="<?php echo $SocialpinterestUrl; ?>" class="gpp">
							<div>
								<i class="fa fa-pinterest" aria-hidden="true"></i>
							</div>
							<div>
								Pinterest
							</div>
						</a>
					</div>
				<?php } ?>
				</div>
			</div>
		</section><?php 
				
		} ?>
		
	<?php }

endif;

if ( function_exists( 'wpazure_kit_consultera_social' ) ) {
	
$homepage_section_priority = apply_filters( 'wpazur_kit_homepage_section_priority', 22, 'wpazure_kit_consultera_social' );
add_action( 'consultera_homepage_sections', 'wpazure_kit_consultera_social', absint( $homepage_section_priority ) );

}