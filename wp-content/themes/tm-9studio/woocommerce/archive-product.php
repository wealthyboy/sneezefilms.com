<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version     3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
Insight::page_title();
$layout = Insight::setting( 'shop_layout' );

$container_class = 'woo-container content-area';
if ( ! Insight::setting( 'shop_wide_mode' ) ) {
	$container_class .= ' container';
}
?>
<div class="<?php echo esc_attr( $container_class ); ?>">
    <div class="woo-row row">
		<?php if ( is_active_sidebar( 'sidebar_shop' ) && ( $layout === 'sidebar-content' ) ) {
			do_action( 'woocommerce_sidebar' );
		} ?>
        <div
                class="<?php echo esc_attr( is_active_sidebar( 'sidebar_shop' ) && ( $layout === 'content-sidebar' || $layout === 'sidebar-content' ) ? 'woo-main col-md-9' : 'woo-main col-md-12' ); ?>">
			<?php if ( woocommerce_product_loop() ) {
				do_action( 'woocommerce_before_shop_loop' );
				woocommerce_product_loop_start();
				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
						do_action( 'woocommerce_shop_loop' );
						wc_get_template_part( 'content', 'product' );
					}
				}
				woocommerce_product_loop_end();
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				do_action( 'woocommerce_no_products_found' );
			} ?>
        </div>
		<?php if ( is_active_sidebar( 'sidebar_shop' ) && ( $layout === 'content-sidebar' ) ) {
			do_action( 'woocommerce_sidebar' );
		} ?>
    </div>
</div>
<?php get_footer( 'shop' ); ?>
