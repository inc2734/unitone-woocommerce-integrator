<?php
/**
 * @package unitone-woocommerce-integrator
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Enqueue assets
 */
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_enqueue_style(
			'unitone/woocommerce-integrator',
			UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/app.css',
			array( 'woocommerce-general' ),
			filemtime( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/app.css' )
		);

		if ( is_checkout() || is_cart() || is_account_page() ) {
			wp_add_inline_style(
				'unitone',
				'.entry-content, .wp-block-post-content { --unitone--max-width: var(--wp--custom--container-max-width) }'
			);
		}
	}
);
