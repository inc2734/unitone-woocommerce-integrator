<?php
/**
 * @package unitone-woocommerce-integrator
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Remove default WooCommerce breadcrumbs.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

/**
 * Breadcrubs
 */
add_filter(
	'unitone_breadcrumbs',
	function( $breadcrumbs ) {
		if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
			return $breadcrumbs;
		}

		$wc_breadcrumbs = array();

		if ( is_product() || is_product_category() || is_product_tag() ) {
			$shop_page_id     = wc_get_page_id( 'shop' );
			$shop_url         = get_permalink( $shop_page_id );
			$shop_label       = get_the_title( $shop_page_id );
			$wc_breadcrumbs[] = array(
				'title' => $shop_label,
				'link'  => $shop_url,
			);
		}

		$wc_breadcrumb     = new WC_Breadcrumb();
		$wc_breadcrumb_arr = $wc_breadcrumb->generate();
		foreach ( $wc_breadcrumb_arr as $value ) {
			$wc_breadcrumbs[] = array(
				'title' => $value[0],
				'link'  => $value[1],
			);
		}

		if ( is_product_tag() ) {
			$_term = get_queried_object();
			$wc_breadcrumbs[ count( $wc_breadcrumbs ) - 1 ]['title'] = $_term->name;
		}

		/**
		 * @see https://github.com/inc2734/snow-monkey/issues/766
		 */
		if ( class_exists( '\WC_Subscriptions_Change_Payment_Gateway' ) ) {
			$is_request_to_change_payment = \WC_Subscriptions_Change_Payment_Gateway::$is_request_to_change_payment;

			if ( is_main_query() && is_page() && is_checkout_pay_page() && $is_request_to_change_payment ) {
				$page_on_front = get_option( 'page_on_front' );
				$home_label    = __( 'Home', 'unitone-woocommerce-integrator' );
				if ( $page_on_front ) {
					$home_label = get_post( $page_on_front )->post_title;
				}

				$wc_breadcrumbs[0]['title'] = $home_label;
				$wc_breadcrumbs[1]['title'] = __( 'My account', 'unitone-woocommerce-integrator' );
				return $wc_breadcrumbs;
			}
		}

		return array_merge(
			array(
				$breadcrumbs[0],
			),
			$wc_breadcrumbs
		);
	}
);
