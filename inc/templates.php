<?php
/**
 * @package unitone-woocommerce-integrator
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Add patterns.
 *
 * The slug should be `unitone-woocommerce-integrator/*` though,
 * However, due to historical reasons, it should be `unitone/*`.
 */
add_action(
	'init',
	function () {
		$patterns = array(
			array(
				'title'    => __( 'Main Area (One Column) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/archive-product/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/archive-product/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Main Area (Right Sidebar / Page Header (Image)) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/main/right-sidebar-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/archive-product/main/right-sidebar-page-header-image.php',
			),
			array(
				'title'    => __( 'Main Area (Right Sidebar) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/main/right-sidebar',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/archive-product/main/right-sidebar.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/archive-product/page-header/image.php',
			),
			array(
				'title'    => __( 'Page Header for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/page-header/default',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/archive-product/page-header/default.php',
			),

			array(
				'title'    => __( 'Contents for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/cart',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/cart/cart.php',
			),
			array(
				'title'    => __( 'Main Area (One Column) for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/cart/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/cart/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/cart/page-header/image.php',
			),
			array(
				'title'    => __( 'Page Header for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/page-header/default',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/cart/page-header/default.php',
			),

			array(
				'title'    => __( 'Contents for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/checkout',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/checkout/checkout.php',
			),
			array(
				'title'    => __( 'Main Area (One Column) for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/checkout/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/checkout/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/checkout/page-header/image.php',
			),
			array(
				'title'    => __( 'Page Header for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/page-header/default',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/checkout/page-header/default.php',
			),

			array(
				'title'    => __( 'Contents for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/order-confirmation',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/order-confirmation/order-confirmation.php',
			),
			array(
				'title'    => __( 'Main Area (One Column) for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/order-confirmation/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/order-confirmation/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/order-confirmation/page-header/image.php',
			),
			array(
				'title'    => __( 'Page Header for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/page-header/default',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/order-confirmation/page-header/default.php',
			),

			array(
				'title'    => __( 'Main Area (One Column) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/single-product/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/single-product/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Main Area (Right Sidebar / Page Header (Image)) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/main/right-sidebar-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/single-product/main/right-sidebar-page-header-image.php',
			),
			array(
				'title'    => __( 'Main Area (Right Sidebar) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/main/right-sidebar',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/single-product/main/right-sidebar.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/private/template/single-product/page-header/image.php',
			),

			array(
				'title'         => __( 'Product Catalog: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-archive-product-left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Product Catalog: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-archive-product-left-header.php',
			),
			array(
				'title'         => __( 'Product Catalog: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-archive-product-one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Product Catalog: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-archive-product-one-column.php',
			),
			array(
				'title'         => __( 'Product Catalog: Right Sidebar / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/right-sidebar-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-archive-product-right-sidebar-page-header-image.php',
			),
			array(
				'title'         => __( 'Product Catalog: Right Sidebar', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/right-sidebar',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-archive-product-right-sidebar.php',
			),
			array(
				'title'         => __( 'Cart: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-cart-left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Cart: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-cart-left-header.php',
			),
			array(
				'title'         => __( 'Cart: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-cart-one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Cart: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-cart-one-column.php',
			),
			array(
				'title'         => __( 'Checkout: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-checkout-left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Checkout: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-checkout-left-header.php',
			),
			array(
				'title'         => __( 'Checkout: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-checkout-one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Checkout: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-checkout-one-column.php',
			),
			array(
				'title'         => __( 'Order Confirmation: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-order-confirmation-left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Order Confirmation: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-order-confirmation-left-header.php',
			),
			array(
				'title'         => __( 'Order Confirmation: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-order-confirmation-one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Order Confirmation: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-order-confirmation-one-column.php',
			),
			array(
				'title'         => __( 'Single Products: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-product-left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Single Products: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-product-left-header.php',
			),
			array(
				'title'         => __( 'Single Products: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-product-one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Single Products: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-product-one-column.php',
			),
			array(
				'title'         => __( 'Single Products: Right Sidebar / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/right-sidebar-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-product-right-sidebar-page-header-image.php',
			),
			array(
				'title'         => __( 'Single Products: Right Sidebar', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/right-sidebar',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-product-right-sidebar.php',
			),
			array(
				'title'         => __( 'Single Posts: Right Sidebar / Page Header (Featured Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single/right-sidebar-page-header-featured',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-right-sidebar-page-header-featured.php',
			),
			array(
				'title'         => __( 'Single Posts: Right Sidebar / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single/right-sidebar-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-right-sidebar-page-header-image.php',
			),
			array(
				'title'         => __( 'Single Posts: Right Sidebar', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single/right-sidebar',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template-single-right-sidebar.php',
			),
		);

		foreach ( $patterns as $pattern ) {
			ob_start();
			include $pattern['path'];
			$pattern['content'] = ob_get_clean();
			unset( $pattern['path'] );
			register_block_pattern( $pattern['slug'], $pattern );
		}
	},
	9
);

/**
 * Add templates.
 *
 * The slug should be `unitone-woocommerce-integrator//*` though,
 * However, due to historical reasons, it should be `unitone//*`.
 *
 * @see https://github.com/woocommerce/woocommerce/tree/trunk/plugins/woocommerce/templates/templates/blockified
 * @see https://github.com/woocommerce/woocommerce/tree/trunk/plugins/woocommerce/src/Blocks/Templates
 */
add_action(
	'init',
	function () {
		$block_templates = array(
			array(
				'slug'    => 'unitone//archive-product',
				'title'   => __( 'Product Catalog', 'unitone-woocommerce-integrator' ),
				'content' => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/archive-product.html' ),
			),
			array(
				'slug'    => 'unitone//order-confirmation',
				'title'   => __( 'Order Confirmation', 'unitone-woocommerce-integrator' ),
				'content' => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/order-confirmation.html' ),
			),
			array(
				'slug'    => 'unitone//page-cart',
				'title'   => __( 'Page: Cart', 'unitone-woocommerce-integrator' ),
				'content' => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/page-cart.html' ),
			),
			array(
				'slug'    => 'unitone//page-checkout',
				'title'   => __( 'Page: Checkout', 'unitone-woocommerce-integrator' ),
				'content' => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/page-checkout.html' ),
			),
			array(
				'slug'    => 'unitone//single-product',
				'title'   => __( 'Single Product', 'unitone-woocommerce-integrator' ),
				'content' => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/single-product.html' ),
			),
			array(
				'slug'       => 'unitone//template-single-product-one-column',
				'title'      => __( 'Single Products: One Column', 'unitone-woocommerce-integrator' ),
				'content'    => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-one-column.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => 'unitone//template-single-product-one-column-page-header-image',
				'title'      => __( 'Single Products: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'content'    => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-one-column-page-header-image.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => 'unitone//template-single-product-right-sidebar',
				'title'      => __( 'Single Products: Right Sidebar', 'unitone-woocommerce-integrator' ),
				'content'    => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-right-sidebar.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => 'unitone//template-single-product-right-sidebar-page-header-image',
				'title'      => __( 'Single Products: Right Sidebar / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'content'    => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-right-sidebar-page-header-image.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => 'unitone//template-single-product-left-header',
				'title'      => __( 'Single Products: Left Header', 'unitone-woocommerce-integrator' ),
				'content'    => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-left-header.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => 'unitone//template-single-product-left-header-page-header-image',
				'title'      => __( 'Single Products: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'content'    => file_get_contents( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-left-header-page-header-image.html' ),
				'post_types' => array( 'product' ),
			),
		);

		foreach ( $block_templates as $block_template ) {
			$slug = $block_template['slug'];
			unset( $block_template['slug'] );

			register_block_template(
				$slug,
				$block_template
			);
		}

		add_filter(
			'wp_theme_json_data_theme',
			function ( $theme_json ) use ( $block_templates ) {
				$custom_templates = array_map(
					function ( $block_template ) {
						if ( empty( $block_template['post_types'] ) ) {
							return false;
						}

						return array(
							'name'      => str_replace( 'unitone//', '', $block_template['slug'] ),
							'title'     => $block_template['title'],
							'postTypes' => $block_template['post_types'],
						);
					},
					$block_templates
				);

				$custom_templates = array_filter(
					$custom_templates,
					function ( $custom_template ) {
						return is_array( $custom_template );
					}
				);

				$raw_data = $theme_json->get_data();

				$new_data = array(
					'version'         => $raw_data['version'],
					'customTemplates' => array_merge(
						$raw_data['customTemplates'],
						$custom_templates
					),
				);

				return $theme_json->update_with( $new_data );
			}
		);
	}
);

/**
 * Using wide size template.
 */
add_filter(
	'pre_get_block_templates',
	function ( $query_result ) {
		if ( is_account_page() ) {
			return array(
				get_block_template( 'unitone//template-page-one-column-page-header-wide' ),
			);
		}
		return $query_result;
	}
);
