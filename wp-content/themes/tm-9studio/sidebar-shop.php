<?php if ( is_active_sidebar( 'sidebar_shop' ) ) { ?>
    <div id="sidebar"
         class="sidebar woo-sidebar col-md-3 <?php echo esc_attr( Insight::setting( 'hide_sidebar_mobile' ) == true ? 'hidden-sm hidden-xs' : '' ); ?>">
        <div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar_shop' ); ?>
        </div>
    </div>
<?php }
