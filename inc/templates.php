<?php
/**
 * @package unitone-woocommerce-integrator
 * @author inc2734
 * @license GPL-2.0+
 */



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
