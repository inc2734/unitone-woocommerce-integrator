<?php
/**
 * Verify the theme integration and the assets produced by the build.
 */
class IntegrationTest extends WP_UnitTestCase {

	/**
	 * Ensure that the integration is loaded with its real dependencies.
	 */
	public function test_dependencies_are_loaded() {
		$this->assertSame( 'unitone', get_template() );
		$this->assertTrue( wp_get_theme()->exists() );
		$this->assertTrue( function_exists( 'unitone_template_get_content' ) );
		$this->assertTrue( class_exists( 'WooCommerce' ) );
		$this->assertTrue( WP_Block_Patterns_Registry::get_instance()->is_registered( 'unitone/template/cart/cart' ) );
	}

	/**
	 * Ensure that the compiled stylesheet is enqueued with its dependency.
	 */
	public function test_compiled_stylesheet_is_enqueued() {
		$this->go_to( home_url( '/' ) );
		do_action( 'wp_enqueue_scripts' );

		$styles = wp_styles();
		$handle = 'unitone/woocommerce-integrator';
		$this->assertTrue( wp_style_is( $handle, 'enqueued' ) );
		$this->assertContains( 'woocommerce-general', $styles->registered[ $handle ]->deps );
		$this->assertSame( UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/app.css', $styles->registered[ $handle ]->src );
		$this->assertFileExists( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/app.css' );
		$this->assertGreaterThan( 0, filesize( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/app.css' ) );
	}

	/**
	 * Ensure that every registered WooCommerce block stylesheet was built.
	 */
	public function test_block_stylesheets_are_built() {
		$this->go_to( home_url( '/' ) );
		do_action( 'wp_enqueue_scripts' );
		$styles = wp_styles();
		$blocks = array(
			'cart',
			'checkout',
			'order-confirmation-summary',
			'order-confirmation-billing-wrapper',
			'order-confirmation-shipping-wrapper',
			'order-confirmation-totals-wrapper',
			'order-confirmation-totals',
			'order-confirmation-downloads-wrapper',
			'order-confirmation-downloads',
			'order-confirmation-status',
		);

		foreach ( $blocks as $block ) {
			// Block themes enqueue these styles when the matching block is rendered.
			$parsed_block = array(
				'blockName' => 'woocommerce/' . $block,
				'attrs'     => array(),
			);
			apply_filters( 'render_block', '', $parsed_block, new WP_Block( $parsed_block ) );

			$handle = 'unitone-woocommerce-integrator/woocommerce/' . $block;
			$path   = UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/dist/css/blocks/woocommerce/' . $block . '.css';
			$this->assertArrayHasKey( $handle, $styles->registered );
			$this->assertTrue( wp_style_is( $handle, 'enqueued' ) );
			$this->assertSame( UNITONE_WOOCOMMERCE_INTEGRATOR_URL . '/dist/css/blocks/woocommerce/' . $block . '.css', $styles->registered[ $handle ]->src );
			$this->assertFileExists( $path );
			$this->assertGreaterThan( 0, filesize( $path ) );
		}
	}

	/**
	 * Ensure that storefront templates use the integration's content.
	 *
	 * @dataProvider storefront_templates
	 * @param string $slug Template slug.
	 */
	public function test_storefront_template_is_overridden( $slug ) {
		$template = get_block_template( get_stylesheet() . '//' . $slug );

		$this->assertInstanceOf( WP_Block_Template::class, $template );
		$this->assertSame( 'unitone-woocommerce-integrator', $template->plugin );
		$this->assertSame( 'plugin', $template->source );
		$this->assertNotEmpty( $template->content );
		$this->assertSame(
			unitone_template_get_content( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/templates/' . $slug . '.html' ),
			$template->content
		);
	}

	/**
	 * Storefront template slugs.
	 *
	 * @return array
	 */
	public static function storefront_templates() {
		return array(
			array( 'archive-product' ),
			array( 'single-product' ),
			array( 'page-cart' ),
			array( 'page-checkout' ),
			array( 'order-confirmation' ),
		);
	}
}
