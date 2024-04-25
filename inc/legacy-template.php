<?php
/**
 * @package unitone-woocommerce-integrator
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Set WooCommerce page title.
 */
add_filter(
	'render_block_woocommerce/legacy-template',
	function ( $block_content ) {
		$block_content = str_replace( 'woocommerce-Tabs-panel', 'woocommerce-Tabs-panel is-layout-constrained', $block_content );
		return $block_content;
	}
);
