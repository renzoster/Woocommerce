<?php
/**
 * Redirect users after add to cart. Works with WooCommerce 3.0+
 */
function custom_add_to_cart_redirect( $url ) {
	$url = WC()->cart->get_checkout_url();
	return $url;
}
add_filter( 'woocommerce_add_to_cart_redirect', 'custom_add_to_cart_redirect' );
