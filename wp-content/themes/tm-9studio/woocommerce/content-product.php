<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$product_id           = $product->get_id();
$shop_product_columns = Insight::setting( 'shop_archive_product_columns' ) !== '' ? Insight::setting( 'shop_archive_product_columns' ) : 3;
$shop_column          = 'col-md-' . ( 12 / $shop_product_columns );
?>
<div <?php wc_product_class( $shop_column, $product ); ?>>
    <div class="woo-thumb">
		<?php
		woocommerce_template_loop_product_link_open();
		woocommerce_show_product_loop_sale_flash();
		woocommerce_template_loop_product_thumbnail();
		woocommerce_template_loop_product_link_close();
		?>
        <div class="woo-actions">
			<?php
			echo '<div class="add-to-cart-btn">';
			woocommerce_template_loop_add_to_cart();
			echo '</div>';
			if ( class_exists( 'WPcleverWoosq' ) ) {
				echo '<div class="quick-view-btn">' . do_shortcode( '[woosq id="' . $product_id . '" type="link"]' ) . '</div>';
			}
			if ( class_exists( 'WPcleverWooscp' ) ) {
				echo '<div class="compare-btn">' . do_shortcode( '[wooscp id="' . $product_id . '" type="link"]' ) . '</div>';
			}
			?>
        </div>
		<?php if ( class_exists( 'WPcleverWoosw' ) ) {
			echo '<div class="wishlist-btn">' . do_shortcode( '[woosw id="' . $product_id . '" type="link"]' ) . '</div>';
		} ?>
    </div>
    <div class="woo-title">
		<?php
		woocommerce_template_loop_product_link_open();
		woocommerce_template_loop_product_title();
		woocommerce_template_loop_product_link_close();
		?>
    </div>
    <div class="woo-price">
		<?php woocommerce_template_loop_price(); ?>
    </div>
</div>
