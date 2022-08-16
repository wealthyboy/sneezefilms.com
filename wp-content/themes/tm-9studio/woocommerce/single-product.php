<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version     1.6.4
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
Insight::page_title();
if ( ( Insight_Helper::get_post_meta( 'page_layout' ) === 'default' ) || ( Insight_Helper::get_post_meta( 'page_layout' ) === '' ) ) {
	$layout = Insight::setting( 'shop_single_layout' );
} else {
	$layout = Insight_Helper::get_post_meta( 'page_layout' );
}

$container_class = 'woo-container content-area';
if ( ! Insight::setting( 'shop_wide_mode' ) ) {
	$container_class .= ' container';
} ?>
    <div class="<?php echo esc_attr( $container_class ); ?>">
        <div class="row woo-row">
			<?php if ( is_active_sidebar( 'sidebar_shop' ) && ( $layout === 'sidebar-content' ) ) {
				do_action( 'woocommerce_sidebar' );
			} ?>
            <div
                    class="<?php echo esc_attr( is_active_sidebar( 'sidebar_shop' ) && ( $layout === 'content-sidebar' || $layout === 'sidebar-content' ) ? 'col-md-9' : 'col-md-12' ); ?>">
				<?php while ( have_posts() ) {
					the_post();
					wc_get_template_part( 'content', 'single-product' );
				} ?>
            </div>
			<?php if ( is_active_sidebar( 'sidebar_shop' ) && ( $layout === 'content-sidebar' ) ) {
				do_action( 'woocommerce_sidebar' );
			} ?>
        </div>
    </div>
<?php get_footer( 'shop' );
