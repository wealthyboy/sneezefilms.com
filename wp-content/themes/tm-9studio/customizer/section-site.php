<?php
$section  = 'site';
$priority = 1;

Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Back to top', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'enable_backtotop',
	'label'       => esc_html__( 'Enable', 'tm-9studio' ),
	'description' => esc_html__( 'Enable this option to show the "back to top" button.', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

/*--------------------------------------------------------------
# Layout
--------------------------------------------------------------*/
Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Layout', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="desc">' . esc_html__( 'Easily adjust your site\'s layout.', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'     => 'radio-image',
	'settings' => 'page_layout',
	'label'    => esc_html__( 'Page', 'tm-9studio' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'fullwidth',
	'choices'  => Insight_Helper::get_list_page_layout(),
) );

Kiki::add_field( 'theme', array(
	'type'     => 'radio-image',
	'settings' => 'post_layout',
	'label'    => esc_html__( 'Post', 'tm-9studio' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'content-sidebar',
	'choices'  => Insight_Helper::get_list_page_layout(),
) );

Kiki::add_field( 'theme', array(
	'type'     => 'radio-image',
	'settings' => 'archive_layout',
	'label'    => esc_html__( 'Archive', 'tm-9studio' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'content-sidebar',
	'choices'  => Insight_Helper::get_list_page_layout(),
) );

Kiki::add_field( 'theme', array(
	'type'     => 'radio-image',
	'settings' => 'search_layout',
	'label'    => esc_html__( 'Search', 'tm-9studio' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'content-sidebar',
	'choices'  => Insight_Helper::get_list_page_layout(),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'toggle',
	'settings'    => 'hide_sidebar_mobile',
	'label'       => esc_html__( 'Hide Sidebar on Mobile', 'tm-9studio' ),
	'description' => esc_html__( 'Enable this option to hide the sidebar on mobile screen.', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );

/*--------------------------------------------------------------
# Main color
--------------------------------------------------------------*/
Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Main color', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'      => 'color',
	'settings'  => 'primary_color',
	'label'     => esc_html__( 'Primary color', 'tm-9studio' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'auto',
	'default'   => Insight::PRIMARY_COLOR,
	'output'    => array(
		array(
			'element'  => implode( ',', array(
				'.insight-button.style01 a:hover',
				'.insight-separator--icon i',
				'.insight-title .insight-title--subtitle',
				'.icon-boxes--icon',
				'.insight-about2 .link',
				'.insight-process--step--icon',
				'.blog-list-style .entry-more a:hover',
				'.footer.style01 .widget ul li a:hover, .footer.style02 .widget ul li a:hover',
				'.copyright .copyright-right ul li a:hover',
				'.insight-icon',
				'.insight-accordion .item .title .icon i',
				'blog.grid .blog-grid-style .entry-more a:hover',
				'.insight-about--carousel a span',
				'.insight-blog.grid_has_padding .blog-grid-style .entry-more a:hover',
				'.insight-about3 .row-bottom .about3-quote span',
				'.insight-about3 .row-bottom .about3-quote span',
				'.insight-about3 .about3-title h1, .insight-about3 .about3-title .sub-title',
				'.insight-our-services .icon',
				'#menu .menu__container .sub-menu li.menu-item-has-children:hover:after, #menu .menu__container .children li.menu-item-has-children:hover:after, #menu .menu__container > ul .sub-menu li.menu-item-has-children:hover:after, #menu .menu__container > ul .children li.menu-item-has-children:hover:after',
				'.insight-our-services .more',
				'#menu .menu__container .sub-menu li a:hover, #menu .menu__container .children li a:hover, #menu .menu__container > ul .sub-menu li a:hover, #menu .menu__container > ul .children li a:hover',
				'#right-slideout .widget.insight-core-bmw ul li a:hover, #right-slideout .widget.widget_nav_menu ul li a:hover',
				'.insight-gallery .insight-gallery-image .desc-wrap .icon',
				'.blog-grid .blog-grid-style .entry-more a:hover',
				'#menu .menu__container li.current-menu-item > a, #menu .menu__container li.current-menu-ancestor > a, #menu .menu__container li.current-menu-parent > a, #menu .menu__container > ul li.current-menu-item > a, #menu .menu__container > ul li.current-menu-ancestor > a, #menu .menu__container > ul li.current-menu-parent > a',
				'.mobile-menu > ul.menu li a:hover',
				'input[type="submit"]:hover',
				'.breadcrumbs ul li a:hover',
				'.post-quote blockquote .fa-quote-left, .post-quote blockquote .fa-quote-right',
				'.single .content .content-area .entry-footer .tags a:hover',
				'.single .content .comments-area .comment-list li article .reply a:hover',
				'.single .content .entry-nav .left:hover i, .single .content .entry-nav .right:hover i',
				'.newsletter-style01 form input[type="submit"]:hover',
				'.blog-grid .blog-grid-style .entry-more a:hover, .insight-blog.grid .blog-grid-style .entry-more a:hover, .insight-blog.grid_has_padding .blog-grid-style .entry-more a:hover',
				'button:hover, .insight-btn:hover, body.page .comments-area .comment-form input[type="submit"]:hover, .single .content .comments-area .comment-form input[type="submit"]:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover',
				'.insight-video .title1',
				'.dark-style .menu a:hover, .header-social a:hover',
				'.blog-grid .blog-grid-style .entry-more a:hover, .insight-blog.grid .blog-grid-style .entry-more a:hover, .insight-blog.grid_has_padding .blog-grid-style .entry-more a:hover',
				'.insight-pagination a.current, .insight-pagination span.current, .insight-pagination span:hover',
				'a:hover .entry-title',
				'.insight-project-featured .info .more a',
				'.insight-button.style04 a',
				'.icon-boxes.icon_on_top .icon-boxes--link a',
				'.insight-blog-carousel.style02 .blog-item .blog-item-inner .blog-info .blog-info-title:hover',
				'.insight-blog-carousel.style02 .blog-item .blog-item-inner .blog-info .blog-info-meta .meta > span.view:before',
				'.insight-blog-carousel.style02 .blog-item .blog-item-inner .blog-info .blog-info-meta .meta > span.like a:before',
				'.open-right-content ul li a:hover',
				'.insight-project-filter .insight-filter ul li a.active',
				'.insight-project-filter .insight-filter ul li a:hover',
				'.project-grid-style .project-grid-item .project-grid-item-inner .info .meta > span.view:before',
				'.project-grid-style .project-grid-item .project-grid-item-inner .info .meta > span.comment:before',
				'.project-grid-style .project-grid-item .project-grid-item-inner .info .category a:hover',
				'.insight-hire-box.style01 .title',
				'.insight-hire-box.style01 .link a',
				'.insight-home-blog .blog-wrap:hover .col-text .title',
				'.insight-home-blog .blog-wrap .meta > span.view:before',
				'.insight-home-blog .blog-wrap .meta > span.comment:before',
				'.footer.style02 .widget ul li a:hover:before',
				'.copyright.style02 .copyright-left span',
				'.insight-home-blog .blog-wrap:hover .col-quote .text .title',
				'.icon-boxes.icon_on_top_2 .icon-boxes--icon',
				'.icon-boxes.icon_on_top_2 .icon-boxes--link a',
				'.insight-project-masonry .insight-filter ul li a:hover',
				'.insight-project-masonry .insight-filter ul li a.active',
				'.insight-project-masonry .insight-filter-items .insight-filter-item .item-inner .thumb .meta > span.view:before',
				'.insight-project-masonry .insight-filter-items .insight-filter-item .item-inner .thumb .meta > span.comment:before',
				'.insight-project-masonry .insight-filter-items .insight-filter-item .item-inner .info .category a:hover',
				'.insight-project-masonry .insight-filter-items .insight-filter-item .item-inner .info .title a:hover',
				'.insight-blog-carousel .blog-item .blog-item-inner .meta > span.view:before',
				'.insight-blog-carousel .blog-item .blog-item-inner .meta > span.comment:before',
				'.project-list-style .project-list-item .col-info .info .title a:hover',
				'.project-list-style .project-list-item .col-info .info .category a:hover',
				'.project-list-style .project-list-item .col-info .info .meta > span.view:before',
				'.project-list-style .project-list-item .col-info .info .meta > span.like a:before',
				'.project-list-style .project-list-item .col-info .info .meta > span.comment:before',
				'.insight-team-carousel.style01 .team-carousel-item .insight-filter-item-inner .info .name a:hover',
				'.insight-team-carousel.style01 .team-carousel-item .insight-filter-item-inner .info .socials a:hover',
				'.blog-classic-style .meta > span.view:before, .single-post .meta > span.view:before, .blog-grid-style .meta > span.view:before',
				'.blog-classic-style .meta > span.like a:before, .single-post .meta > span.like a:before, .blog-grid-style .meta > span.like a:before',
				'.blog-classic-style .meta > span.comment:before, .single-post .meta > span.comment:before, .blog-grid-style .meta > span.comment:before',
				'.insight-pagination a:hover',
				'.insight-one-page .insight-one-page-item .insight-one-page-item-inner .text .meta > span.view:before',
				'.insight-one-page .insight-one-page-item .insight-one-page-item-inner .text .meta > span.comment:before',
				'.vc_custom_heading.typed mark',
				'.vc_custom_heading.typed .typed-cursor',
				'.insight-social-link.style02 a:hover span',
				'.insight-our-services-list .items .item .number',
				'.insight-our-services-list .big-title a:hover',
				'.insight-our-services-list .big-title a:after',
				'.insight-team-filter .insight-filter-items .insight-filter-item .insight-filter-item-inner .info .socials a:hover',
				'.insight-team-filter .insight-filter-items .insight-filter-item .insight-filter-item-inner .info .name a:hover',
				'.insight-hire-box.style02 .insight-hire-box-right .link a',
				'.insight-our-services.type-icon.color-white .col-icon .icon',
				'.insight-our-services.type-icon:hover .col-text .text .title',
				'.insight-our-services.type-icon.color-black .col-icon .icon',
				'.insight-our-services.type-image:hover .col-text .text .title',
				'.insight-grid-filter ul li a.active, .insight-gallery-filter ul li a.active',
				'.insight-grid-filter ul li a.active, .insight-gallery-filter ul li a:hover',
				'.insight-gallery .insight-gallery-image .desc-wrap .title:after',
				'.insight-gallery .pagination a:hover',
				'body.error404 .follow-404 .follow-404-socials a:hover',
				'body.error404 .contact-404',
				'.woocommerce .woo-products .product .woo-thumb .woo-actions .add-to-cart-btn a:hover',
				'.woocommerce .woo-products .product .woo-thumb .woo-actions .add-to-cart-btn a:hover:after',
				'.woocommerce .woo-products .product .woo-thumb .woo-actions .quick-view-btn a:hover:before',
				'.woocommerce .woo-products .product .woo-thumb .woo-actions .compare-btn a:hover:before',
				'.woocommerce .woo-pagination a.current, .woocommerce .woo-pagination span.current',
				'.woocommerce.single-product .product .summary .product_meta table tr td a:hover',
				'.landing_image_01 .vc_figure:before',
			) ),
			'property' => 'color',
		),
		array(
			'element'  => implode( ',', array(
				'.st-bg',
				'.blog-classic-style.format-video .post-thumbnail > a:before, .blog-classic-style.format-video .insight-light-video > a:before, .blog-classic-style .format-video .post-thumbnail > a:before, .blog-classic-style .format-video .insight-light-video > a:before, .single-post.format-video .post-thumbnail > a:before, .single-post.format-video .insight-light-video > a:before, .single-post .format-video .post-thumbnail > a:before, .single-post .format-video .insight-light-video > a:before',
				'.insight-our-services.type-image .col-text .text .title:before',
				'.insight-our-services.type-icon.color-primary .col-icon .icon',
				'.insight-our-services-list .big-title a:hover:after',
				'.insight-button.style04.btn-white a:hover',
				'.insight-project-justified .insight-project-justified-items .insight-project-justified-item .item-inner:before',
				'.onepage-pagination li a:after',
				'.insight-one-page .insight-one-page-item .insight-one-page-item-inner .video .video-inner .video-play:before',
				'.insight-one-page .insight-one-page-item .insight-one-page-item-inner .video .video-inner .video-play:after',
				'.insight-menu-add-param ul li a:hover, .insight-menu-add-param ul li a.active',
				'.insight-list-categories a',
				'.project-list-style .project-list-item:nth-child(even) .col-info .info .title:after',
				'.project-list-style .project-list-item:nth-child(odd) .col-info .info .title:before',
				'.icon-boxes.icon_on_top_2:hover .icon-boxes--icon',
				'.icon-boxes.icon_on_top_2:hover .icon-boxes--link a',
				'.insight-home-blog .blog-wrap .col-image .video-play:before',
				'.insight-home-blog .blog-wrap .col-image .video-play:after',
				'.footer.style02 .footer-social a:hover',
				'.footer.style02 .widget .widget-title:after',
				'.icon-boxes.icon_on_top:hover .icon-boxes--link a',
				'.insight-button.style01 a',
				'.insight-video a:before',
				'.insight-video a:after',
				'.insight-button.style02 i',
				'.insight-process--step--icon:hover',
				'.insight-process--step--icon:hover .order',
				'.insight-process--small-icon',
				'.blog-list-style .entry-title:before',
				'.footer .mc4wp-form input[type="submit"]',
				'.hint--success:after',
				'#menu .mega-menu .wpb_text_column ul li.sale a:after',
				'.insight-accordion .item.active .title, .insight-accordion .item:hover .title',
				'button, input[type="button"], input[type="reset"], input[type="submit"]',
				'.footer .footer-social a:hover',
				'#right-slideout .widget.insight-socials .socials a:hover',
				'.icon-boxes.icon_on_top:hover .icon-boxes--title:after',
				'.top-search',
				'.insight-btn',
				'.insight-team-member:hover .name:after',
				'.insight-social a:hover',
				'.insight-social-icons a:hover',
				'button, .insight-btn, body.page .comments-area .comment-form input[type="submit"], .single .content .comments-area .comment-form input[type="submit"], input[type="button"], input[type="reset"], input[type="submit"]',
				'.insight-social a:hover',
				'.insight-video .btn-container a, .insight-video .btn-container a:before',
				'.widget-area .widget.widget_insight_categories .item:hover span',
				'.widget-area .widget.widget_tag_cloud a:hover',
				'.insight-dot-style01:after',
				'a.scrollup',
				'a.scrollup:before',
				'.insight-button.style04 a:hover',
				'.insight-list-member .item .name:after',
				'.widget-area .widget .widget-title:after',
				'.vc_custom_heading.bottom-line:after',
				'.woocommerce.single-product .product .summary form.cart button[type="submit"]:hover',
				'.woocommerce.single-product .product #reviews #review_form input[type="submit"]:hover',
				'.woocommerce a.button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover',
			) ),
			'property' => 'background-color',
		),
		array(
			'element'  => implode( ',', array(
				'.landing_image_01 .vc_figure:before',
				'.woocommerce a.button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover',
				'.woocommerce.single-product .product #reviews #review_form input[type="submit"]:hover',
				'.woocommerce.single-product .product .summary form.cart button[type="submit"]:hover',
				'.blog-classic-style.format-video .post-thumbnail > a:before, .blog-classic-style.format-video .insight-light-video > a:before, .blog-classic-style .format-video .post-thumbnail > a:before, .blog-classic-style .format-video .insight-light-video > a:before, .single-post.format-video .post-thumbnail > a:before, .single-post.format-video .insight-light-video > a:before, .single-post .format-video .post-thumbnail > a:before, .single-post .format-video .insight-light-video > a:before',
				'body.error404 .content-404 span a:hover',
				'.insight-grid-filter ul li a.active, .insight-gallery-filter ul li a.active',
				'.insight-grid-filter ul li a.active, .insight-gallery-filter ul li a:hover',
				'.insight-hire-box.style02 .insight-hire-box-right .link a',
				'.insight-our-services-list .big-title a:hover:after',
				'.insight-button.style04.btn-white a:hover',
				'.insight-menu-add-param ul li a:hover, .insight-menu-add-param ul li a.active',
				'.insight-project-masonry .insight-filter ul li a:hover',
				'.insight-project-masonry .insight-filter ul li a.active',
				'.insight-hire-box.style01 .link a',
				'.icon-boxes.icon_on_top_2:hover .icon-boxes--link a',
				'.footer.style02 .footer-social a:hover',
				'.insight-project-filter .insight-filter ul li a.active',
				'.insight-project-filter .insight-filter ul li a:hover',
				'.icon-boxes.icon_on_top:hover .icon-boxes--link a',
				'.insight-button.style04 a',
				'.insight-project-featured .info .more a:hover',
				'.insight-button.style01 a',
				'.insight-about--carousel a:before',
				'.insight-gallery .insight-gallery-image .desc-wrap',
				'button, input[type="button"], input[type="reset"], input[type="submit"]',
				'.widget-area .widget.widget_search .search-form input[type="search"]:focus',
				'.widget-area .widget.widget_tag_cloud a:hover',
				'.footer .footer-social a:hover',
				'.growl a.cookie_notice_ok',
				'#menu .menu__container .sub-menu, #menu .menu__container .children, #menu .menu__container > ul .sub-menu, #menu .menu__container > ul .children',
				'#right-slideout .widget .widget-title',
				'#right-slideout .widget.insight-socials .socials a:hover',
				'.insight-btn',
				'.insight-social-icons a:hover',
				'button, .insight-btn, body.page .comments-area .comment-form input[type="submit"], .single .content .comments-area .comment-form input[type="submit"], input[type="button"], input[type="reset"], input[type="submit"]',
				'.insight-social a:hover',
				'button:hover, .insight-btn:hover, body.page .comments-area .comment-form input[type="submit"]:hover, .single .content .comments-area .comment-form input[type="submit"]:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover',
			) ),
			'property' => 'border-color',
		),
		array(
			'element'  => implode( ',', array(
				'#menu .menu__container > li > .sub-menu, #menu .menu__container > li .children, #menu .menu__container > ul > li > .sub-menu, #menu .menu__container > ul > li .children',
				'#menu .menu__container > li:hover > .sub-menu li:hover > .sub-menu, #menu .menu__container > li:hover > .sub-menu li:hover > .children, #menu .menu__container > li:hover > .children li:hover > .sub-menu, #menu .menu__container > li:hover > .children li:hover > .children, #menu .menu__container > ul > li:hover > .sub-menu li:hover > .sub-menu, #menu .menu__container > ul > li:hover > .sub-menu li:hover > .children, #menu .menu__container > ul > li:hover > .children li:hover > .sub-menu, #menu .menu__container > ul > li:hover > .children li:hover > .children',
			) ),
			'property' => 'border-top-color',
		),
		array(
			'element'  => implode( ',', array(
				'#menu .menu__container .sub-menu li a:hover, #menu .menu__container .children li a:hover, #menu .menu__container > ul .sub-menu li a:hover, #menu .menu__container > ul .children li a:hover',
			) ),
			'property' => 'border-bottom-color',
		),
		array(
			'element'  => implode( ',', array(
				'.pri-color',
				'.primary-color',
				'.primary-color-hover:hover',
			) ),
			'property' => 'color',
			'suffix'   => ' !important'
		),
		array(
			'element'  => implode( ',', array(
				'.primary-background-color',
				'.primary-background-color-hover:hover',
				'.growl a.cookie_notice_ok:hover',
			) ),
			'property' => 'background-color',
			'suffix'   => ' !important'
		),
		array(
			'element'  => implode( ',', array(
				'.primary-border-color',
				'.primary-border-color-hover:hover',
			) ),
			'property' => 'border-color',
			'suffix'   => ' !important'
		),
		array(
			'element'  => implode( ',', array(
				'.hint--success.hint--top:before',
			) ),
			'property' => 'border-top-color',
		),
		array(
			'element'  => implode( ',', array(
				'.hint--success.hint--right:before',
			) ),
			'property' => 'border-right-color',
		),
		array(
			'element'  => implode( ',', array(
				'.hint--success.hint--bottom:before',
			) ),
			'property' => 'border-bottom-color',
		),
		array(
			'element'  => implode( ',', array(
				'.hint--success.hint--left:before',
			) ),
			'property' => 'border-left-color',
		),
	),
) );

/*--------------------------------------------------------------
# Link color
--------------------------------------------------------------*/
Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Link color', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'      => 'color',
	'settings'  => 'link_color',
	'label'     => esc_html__( 'Normal', 'tm-9studio' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'auto',
	'default'   => Insight::TEXT_COLOR,
	'output'    => array(
		array(
			'element'  => 'a',
			'property' => 'color',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'      => 'color',
	'settings'  => 'link_color_hover',
	'label'     => esc_html__( 'Hover', 'tm-9studio' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'auto',
	'default'   => Insight::PRIMARY_COLOR,
	'output'    => array(
		array(
			'element'  => 'a:hover',
			'property' => 'color',
		),
	),
) );

/*--------------------------------------------------------------
# Body typography
--------------------------------------------------------------*/
Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Body typography', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'        => 'typography',
	'settings'    => 'site_body_typo',
	'label'       => esc_html__( 'Font family', 'tm-9studio' ),
	'description' => esc_html__( 'These settings control the typography for all body text.', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => Insight::FONT_PRIMARY,
		'variant'        => 'regular',
		'color'          => Insight::TEXT_COLOR,
		'line-height'    => '1.8',
		'letter-spacing' => '0em',
	),
	'output'      => array(
		array(
			'element' => 'body',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'      => 'slider',
	'settings'  => 'body_font_size',
	'label'     => esc_html__( 'Font size', 'tm-9studio' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 15,
	'transport' => 'auto',
	'choices'   => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'output'    => array(
		array(
			'element'  => 'body',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_heading_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Secondary font', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'      => 'typography',
	'settings'  => 'secondary_fontfamily',
	'label'     => esc_html__( 'Font family', 'tm-9studio' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'auto',
	'default'   => array(
		'font-family' => Insight::FONT_SECONDARY,
	),
	'output'    => array(
		array(
			'element' => implode( ',', array(
				'.nd-font',
				'.font-secondary',
				'.font-2nd',
				'.single .content .content-area figure.alignleft .wp-caption-text',
				'button',
				'.insight-btn',
				'input[type="button"]',
				'input[type="reset"]',
				'input[type="submit"]',
			) ),
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_heading_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Third font', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'      => 'typography',
	'settings'  => 'third_fontfamily',
	'label'     => esc_html__( 'Font family', 'tm-9studio' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'auto',
	'default'   => array(
		'font-family' => Insight::FONT_THIRD,
	),
	'output'    => array(
		array(
			'element' => implode( ',', array(
				'.font-third',
				'.font-3rd',
				'.rd-font',
			) ),
		),
	),
) );

/*--------------------------------------------------------------
# Normal heading
--------------------------------------------------------------*/
Kiki::add_field( 'theme', array(
	'type'     => 'custom',
	'settings' => 'site_heading_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">' . esc_html__( 'Normal heading typography', 'tm-9studio' ) . '</div>',
) );

Kiki::add_field( 'theme', array(
	'type'        => 'typography',
	'settings'    => 'heading_typo',
	'label'       => esc_html__( 'Font family', 'tm-9studio' ),
	'description' => esc_html__( 'These settings control the typography for all heading text.', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'auto',
	'default'     => array(
		'font-family'    => Insight::FONT_SECONDARY,
		'variant'        => '700',
		'color'          => '#333333',
		'line-height'    => '1.3',
		'letter-spacing' => '0',
	),
	'output'      => array(
		array(
			'element' => 'h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'slider',
	'settings'    => 'h1_font_size',
	'label'       => esc_html__( 'Font size', 'tm-9studio' ),
	'description' => esc_html__( 'H1', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 56,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element'  => 'h1,.h1',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'slider',
	'settings'    => 'h2_font_size',
	'description' => esc_html__( 'H2', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 40,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element'  => 'h2,.h2',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'slider',
	'settings'    => 'h3_font_size',
	'description' => esc_html__( 'H3', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 34,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element'  => 'h3,.h3',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'slider',
	'settings'    => 'h4_font_size',
	'description' => esc_html__( 'H4', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 24,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element'  => 'h4,.h4',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'slider',
	'settings'    => 'h5_font_size',
	'description' => esc_html__( 'H5', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 18,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element'  => 'h5,.h5',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );

Kiki::add_field( 'theme', array(
	'type'        => 'slider',
	'settings'    => 'h6_font_size',
	'description' => esc_html__( 'H6', 'tm-9studio' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 14,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element'  => 'h6,.h6',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),
) );
