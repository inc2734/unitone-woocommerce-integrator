<?php
/**
 * @package unitone-woocommerce-integrator
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Remove default WooCommerce page title.
 */
add_filter( 'woocommerce_show_page_title', '__return_false' );

/**
 * Set WooCommerce page title.
 */
add_filter(
	'render_block',
	function ( $block_content, $block ) {
		if ( is_shop() || is_product_category() || is_product_tag() ) {
			if ( 'core/post-title' === $block['blockName'] && ! ( $block['attrs']['__woocommerceNamespace'] ?? null ) ) {
				$block_content = preg_replace( '|>(.*)<|ms', '>' . woocommerce_page_title( false ) . '<', $block_content );
			}
		}
		return $block_content;
	},
	10,
	2
);
