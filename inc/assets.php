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
	function () {
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

add_action(
	'after_setup_theme',
	function () {
		wp_enqueue_block_style(
			'woocommerce/cart',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/cart',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/cart.css',
				'path'   => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/cart.css',
			)
		);

		wp_enqueue_block_style(
			'woocommerce/checkout',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/checkout',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/checkout.css',
				'path'   => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/checkout.css',
			)
		);

		wp_enqueue_block_style(
			'woocommerce/order-confirmation-summary',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/order-confirmation-summary',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/order-confirmation-summary.css',
				'path'   => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/order-confirmation-summary.css',
			)
		);

		wp_enqueue_block_style(
			'woocommerce/order-confirmation-billing-wrapper',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/order-confirmation-billing-wrapper',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/order-confirmation-billing-wrapper.css',
				'path'   => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/order-confirmation-billing-wrapper.css',
			)
		);

		wp_enqueue_block_style(
			'woocommerce/order-confirmation-shipping-wrapper',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/order-confirmation-shipping-wrapper',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/order-confirmation-shipping-wrapper.css',
				'path'   => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/order-confirmation-shipping-wrapper.css',
			)
		);

		wp_enqueue_block_style(
			'woocommerce/order-confirmation-totals-wrapper',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/order-confirmation-totals-wrapper',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/order-confirmation-totals-wrapper.css',
				'ver'    => filemtime( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/order-confirmation-totals-wrapper.css' ),
			)
		);

		wp_enqueue_block_style(
			'woocommerce/order-confirmation-totals',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/order-confirmation-totals',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/order-confirmation-totals.css',
				'ver'    => filemtime( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/order-confirmation-totals.css' ),
			)
		);

		wp_enqueue_block_style(
			'woocommerce/order-confirmation-downloads-wrapper',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/order-confirmation-downloads-wrapper',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/order-confirmation-downloads-wrapper.css',
				'ver'    => filemtime( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/order-confirmation-downloads-wrapper.css' ),
			)
		);

		wp_enqueue_block_style(
			'woocommerce/order-confirmation-downloads',
			array(
				'handle' => 'unitone-woocommerce-integrator/woocommerce/order-confirmation-downloads',
				'src'    => UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/order-confirmation-downloads.css',
				'ver'    => filemtime( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/order-confirmation-downloads.css' ),
			)
		);
	}
);
