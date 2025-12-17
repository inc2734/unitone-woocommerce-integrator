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
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Main Area (Right Sidebar / Page Header (Image)) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/main/right-sidebar-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/main/right-sidebar-page-header-image.php',
			),
			array(
				'title'    => __( 'Main Area (Right Sidebar) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/main/right-sidebar',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/main/right-sidebar.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/page-header/image.php',
			),
			array(
				'title'    => __( 'Page Header for Product Catalog', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/archive-product/page-header/default',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/page-header/default.php',
			),

			array(
				'title'    => __( 'Contents for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/cart',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/cart.php',
			),
			array(
				'title'    => __( 'Main Area (One Column) for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/page-header/image.php',
			),
			array(
				'title'    => __( 'Page Header for Cart', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/cart/page-header/default',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/page-header/default.php',
			),

			array(
				'title'    => __( 'Contents for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/checkout',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/checkout.php',
			),
			array(
				'title'    => __( 'Main Area (One Column) for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/page-header/image.php',
			),
			array(
				'title'    => __( 'Page Header for Checkout', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/checkout/page-header/default',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/page-header/default.php',
			),

			array(
				'title'    => __( 'Contents for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/order-confirmation',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/order-confirmation.php',
			),
			array(
				'title'    => __( 'Main Area (One Column) for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/page-header/image.php',
			),
			array(
				'title'    => __( 'Page Header for Order Confirmation', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/order-confirmation/page-header/default',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/page-header/default.php',
			),

			array(
				'title'    => __( 'Main Area (One Column) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/main/one-column',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/main/one-column.php',
			),
			array(
				'title'    => __( 'Main Area (One Column / Page Header (Image)) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/main/one-column-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/main/one-column-page-header-image.php',
			),
			array(
				'title'    => __( 'Main Area (Right Sidebar / Page Header (Image)) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/main/right-sidebar-page-header-image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/main/right-sidebar-page-header-image.php',
			),
			array(
				'title'    => __( 'Main Area (Right Sidebar) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/main/right-sidebar',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/main/right-sidebar.php',
			),
			array(
				'title'    => __( 'Page Header (Image) for Single Products', 'unitone-woocommerce-integrator' ),
				'slug'     => 'unitone/template/single-product/page-header/image',
				'inserter' => false,
				'path'     => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/page-header/image.php',
			),

			array(
				'title'         => __( 'Product Catalog: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Product Catalog: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/left-header.php',
			),
			array(
				'title'         => __( 'Product Catalog: Left Header (Thin) / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/left-header-thin-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/left-header-thin-page-header-image.php',
			),
			array(
				'title'         => __( 'Product Catalog: Left Header (Thin)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/left-header-thin',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/left-header-thin.php',
			),
			array(
				'title'         => __( 'Product Catalog: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Product Catalog: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/one-column.php',
			),
			array(
				'title'         => __( 'Product Catalog: Right Sidebar / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/right-sidebar-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/right-sidebar-page-header-image.php',
			),
			array(
				'title'         => __( 'Product Catalog: Right Sidebar', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/archive-product/right-sidebar',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'archive-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/archive-product/right-sidebar.php',
			),
			array(
				'title'         => __( 'Cart: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Cart: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/left-header.php',
			),
			array(
				'title'         => __( 'Cart: Left Header (Thin) / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/left-header-thin-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/left-header-thin-page-header-image.php',
			),
			array(
				'title'         => __( 'Cart: Left Header (Thin)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/left-header-thin',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/left-header-thin.php',
			),
			array(
				'title'         => __( 'Cart: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Cart: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/cart/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-cart' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/cart/one-column.php',
			),
			array(
				'title'         => __( 'Checkout: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Checkout: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/left-header.php',
			),
			array(
				'title'         => __( 'Checkout: Left Header (Thin) / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/left-header-thin-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/left-header-thin-page-header-image.php',
			),
			array(
				'title'         => __( 'Checkout: Left Header (Thin)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/left-header-thin',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/left-header-thin.php',
			),
			array(
				'title'         => __( 'Checkout: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Checkout: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/checkout/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'page-checkout' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/checkout/one-column.php',
			),
			array(
				'title'         => __( 'Order Confirmation: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Order Confirmation: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/left-header.php',
			),
			array(
				'title'         => __( 'Order Confirmation: Left Header (Thin) / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/left-header-thin-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/left-header-thin-page-header-image.php',
			),
			array(
				'title'         => __( 'Order Confirmation: Left Header (Thin)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/left-header-thin',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/left-header-thin.php',
			),
			array(
				'title'         => __( 'Order Confirmation: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Order Confirmation: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/order-confirmation/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'order-confirmation' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/order-confirmation/one-column.php',
			),
			array(
				'title'         => __( 'Single Products: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/left-header-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/left-header-page-header-image.php',
			),
			array(
				'title'         => __( 'Single Products: Left Header', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/left-header',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/left-header.php',
			),
			array(
				'title'         => __( 'Single Products: Left Header (Thin) / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/left-header-thin-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/left-header-thin-page-header-image.php',
			),
			array(
				'title'         => __( 'Single Products: Left Header (Thin)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/left-header-thin',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/left-header-thin.php',
			),
			array(
				'title'         => __( 'Single Products: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/one-column-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/one-column-page-header-image.php',
			),
			array(
				'title'         => __( 'Single Products: One Column', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/one-column',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/one-column.php',
			),
			array(
				'title'         => __( 'Single Products: Right Sidebar / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/right-sidebar-page-header-image',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/right-sidebar-page-header-image.php',
			),
			array(
				'title'         => __( 'Single Products: Right Sidebar', 'unitone-woocommerce-integrator' ),
				'slug'          => 'unitone/template/single-product/right-sidebar',
				'categories'    => array( 'unitone-templates' ),
				'templateTypes' => array( 'single-product' ),
				'inserter'      => false,
				'path'          => UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/patterns/template/single-product/right-sidebar.php',
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
 * The file_get_contents() for block templates.
 *
 * @param string $file_path The block template file path.
 * @return string
 */
function unitone_template_get_content( $file_path ) {
	static $template_cache = array();

	if ( isset( $template_cache[ $file_path ] ) ) {
		return $template_cache[ $file_path ];
	}

	if ( is_readable( $file_path ) ) {
		$template_cache[ $file_path ] = file_get_contents( $file_path );
	} else {
		$template_cache[ $file_path ] = '';
	}

	return $template_cache[ $file_path ];
}

/**
 * Add templates and override WooCommerce templates.
 *
 * @see https://github.com/woocommerce/woocommerce/tree/trunk/plugins/woocommerce/templates/templates/blockified
 * @see https://github.com/woocommerce/woocommerce/tree/trunk/plugins/woocommerce/src/Blocks/Templates
 */
add_action(
	'init',
	function () {
		$stylesheet = get_stylesheet();

		$woocommerce_block_templates = array(
			array(
				'id'      => $stylesheet . '//archive-product',
				'content' => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/archive-product.html' ),
			),
			array(
				'id'      => $stylesheet . '//order-confirmation',
				'content' => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/order-confirmation.html' ),
			),
			array(
				'id'      => $stylesheet . '//page-cart',
				'content' => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/page-cart.html' ),
			),
			array(
				'id'      => $stylesheet . '//page-checkout',
				'content' => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/page-checkout.html' ),
			),
			array(
				'id'      => $stylesheet . '//single-product',
				'content' => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/single-product.html' ),
			),
		);

		$block_templates = array(
			array(
				'slug'       => $stylesheet . '//template-single-product-one-column',
				'title'      => __( 'Single Products: One Column', 'unitone-woocommerce-integrator' ),
				'content'    => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-one-column.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => $stylesheet . '//template-single-product-one-column-page-header-image',
				'title'      => __( 'Single Products: One Column / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'content'    => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-one-column-page-header-image.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => $stylesheet . '//template-single-product-right-sidebar',
				'title'      => __( 'Single Products: Right Sidebar', 'unitone-woocommerce-integrator' ),
				'content'    => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-right-sidebar.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => $stylesheet . '//template-single-product-right-sidebar-page-header-image',
				'title'      => __( 'Single Products: Right Sidebar / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'content'    => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-right-sidebar-page-header-image.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => $stylesheet . '//template-single-product-left-header',
				'title'      => __( 'Single Products: Left Header', 'unitone-woocommerce-integrator' ),
				'content'    => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-left-header.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => $stylesheet . '//template-single-product-left-header-page-header-image',
				'title'      => __( 'Single Products: Left Header / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'content'    => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-left-header-page-header-image.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => $stylesheet . '//template-single-product-left-header-thin',
				'title'      => __( 'Single Products: Left Header (Thin)', 'unitone-woocommerce-integrator' ),
				'content'    => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-left-header-thin.html' ),
				'post_types' => array( 'product' ),
			),
			array(
				'slug'       => $stylesheet . '//template-single-product-left-header-thin-page-header-image',
				'title'      => __( 'Single Products: Left Header (Thin) / Page Header (Image)', 'unitone-woocommerce-integrator' ),
				'content'    => unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/template-single-product-left-header-thin-page-header-image.html' ),
				'post_types' => array( 'product' ),
			),
		);

		// Register unique templates.
		foreach ( $block_templates as $block_template ) {
			$slug = $block_template['slug'];
			unset( $block_template['slug'] );

			register_block_template(
				$slug,
				$block_template
			);
		}

		// Override WooCommerce templates.
		add_filter(
			'get_block_templates',
			function ( $templates, $query, $template_type ) use ( $woocommerce_block_templates, $block_templates ) {
				if ( 'wp_template' !== $template_type ) {
					return $templates;
				}

				foreach ( $templates as $index => $template ) {
					$found_woocommerce_template = array_find(
						$woocommerce_block_templates,
						function ( $t ) use ( $template ) {
							return $template->id === $t['id'];
						}
					);

					if ( $found_woocommerce_template ) {
						if ( isset( $template->source ) && 'custom' === $template->source ) {
							continue;
						}

						$templates[ $index ]->plugin = 'unitone-woocommerce-integrator';

						$_block_template = get_block_template( $template->id, 'wp_template' );
						if ( 'custom' === $_block_template->source ) {
							$templates[ $index ] = $_block_template;
						} else {
							$templates[ $index ]->content = $found_woocommerce_template['content'];
						}
					}

					$found_template = array_find(
						$block_templates,
						function ( $t ) use ( $template ) {
							return $template->id === $t['slug'];
						}
					);

					if ( $found_template ) {
						$templates[ $index ]->plugin = 'unitone-woocommerce-integrator';
					}
				}
				return $templates;
			},
			10,
			3
		);

		// Even if get_block_template() is called alone
		// (such as when the site editor retrieves it via REST),
		// the WooCommerce template will be replaced with the plugin's content.
		add_filter(
			'pre_get_block_template',
			function ( $template, $id, $template_type ) use ( $woocommerce_block_templates, $stylesheet ) {
				if ( 'wp_template' !== $template_type ) {
					return $template;
				}

				$found_woocommerce_template = array_find(
					$woocommerce_block_templates,
					function ( $t ) use ( $id, $stylesheet ) {
						return $id === $t['id'];
					}
				);

				if ( ! $found_woocommerce_template ) {
					return $template;
				}

				static $resolving = false;
				if ( $resolving ) {
					return $template;
				}
				$resolving = true;
				$original  = get_block_template( $id, $template_type );
				$resolving = false;

				if ( $original && 'custom' === $original->source ) {
					return $original;
				}

				if ( $original ) {
					$original->content = $found_woocommerce_template['content'];
					$original->source  = 'plugin';
					$original->plugin  = 'unitone-woocommerce-integrator';
					return $original;
				}

				$template_obj          = new \WP_Block_Template();
				$template_obj->id      = $id;
				$template_obj->slug    = explode( '//', $id )[1] ?? $id;
				$template_obj->theme   = explode( '//', $id )[0] ?? '';
				$template_obj->type    = $template_type;
				$template_obj->source  = 'plugin';
				$template_obj->status  = 'publish';
				$template_obj->content = $found_woocommerce_template['content'];
				$template_obj->plugin  = 'unitone-woocommerce-integrator';

				return $template_obj;
			},
			10,
			3
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
