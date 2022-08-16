<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version     3.5.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;

$attachment_ids = $product->get_gallery_image_ids();

if ( has_post_thumbnail() ) {
	array_unshift( $attachment_ids, (int) get_post_thumbnail_id( $post->ID ) );
}

if ( is_array( $attachment_ids ) && ( count( $attachment_ids ) > 0 ) ) {
	echo '<div class="woocommerce-main-image">';
	foreach ( $attachment_ids as $attachment_id ) {
		$image_url = wp_get_attachment_image_src( $attachment_id, 'full' );
		echo '<a href="' . esc_url( $image_url[0] ) . '">';
		echo wp_get_attachment_image( $attachment_id, 'shop_single' );
		echo '</a>';
	}
	echo '</div>';
	if ( count( $attachment_ids ) > 1 ) {
		echo '<div class="thumbnails">';
		foreach ( $attachment_ids as $attachment_id ) {
			echo wp_get_attachment_image( $attachment_id, 'shop_single' );
		}
		echo '</div>';
	}
}