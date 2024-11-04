<?php
/**
 * @package unitone-woocommerce-integrator
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Load textdomain.
 */
function unitone_woocommerce_integrator_load_textdomain() {
	load_plugin_textdomain( 'unitone-woocommerce-integrator', false, basename( UNITONE_WOOCOMMERCE_INTEGRATOR_PATH ) . '/languages' );
}
add_action( 'init', 'unitone_woocommerce_integrator_load_textdomain', 1 );
