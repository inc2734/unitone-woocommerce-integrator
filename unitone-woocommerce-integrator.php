<?php
/**
 * Plugin name: unitone WooCommerce integrator
 * Version: 0.1.7
 * Tested up to: 6.6
 * Requires at least: 6.6
 * Requires PHP: 7.4
 * Requires unitone: 15.0.0-beta1
 * Description: This plugin makes unitone beautifully display WooCommerce and adds some features.
 * Author: Takashi Kitajima
 * Author URI: https://2inc.org
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: unitone-woocommerce-integrator
 *
 * @package unitone-woocommerce-integrator
 * @author inc2734
 * @license GPL-2.0+
 */

namespace UnitoneWoocommerceIntegrator;

define( 'UNITONE_WOOCOMMERCE_INTEGRATOR_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'UNITONE_WOOCOMMERCE_INTEGRATOR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

class Bootstrap {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, '_bootstrap' ) );
	}

	/**
	 * Bootstrap.
	 */
	public function _bootstrap() {
		load_plugin_textdomain( 'unitone-woocommerce-integrator', false, basename( __DIR__ ) . '/languages' );

		require UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/inc/updater.php';

		$theme = wp_get_theme( get_template() );
		if ( 'unitone' !== $theme->template ) {
			add_action(
				'admin_notices',
				function () {
					?>
					<div class="notice notice-warning is-dismissible">
						<p>
							<?php esc_html_e( '[unitone WooCommerce integrator] Needs unitone theme.', 'unitone-woocommerce-integrator' ); ?>
						</p>
					</div>
					<?php
				}
			);
			return;
		}

		$data = get_file_data(
			__FILE__,
			array(
				'RequiresUnitone' => 'Requires unitone',
			)
		);

		if (
			isset( $data['RequiresUnitone'] ) &&
			version_compare( $theme->get( 'Version' ), $data['RequiresUnitone'], '<' )
		) {
			add_action(
				'admin_notices',
				function () use ( $data ) {
					?>
					<div class="notice notice-warning is-dismissible">
						<p>
							<?php
							echo esc_html(
								sprintf(
									// translators: %1$s: version.
									__(
										'[unitone WooCommerce Integrator] Needs unitone theme %1$s or more.',
										'unitone-woocommerce-integrator'
									),
									'v' . $data['RequiresUnitone']
								)
							);
							?>
						</p>
					</div>
					<?php
				}
			);
			return;
		}

		if ( ! class_exists( 'woocommerce' ) ) {
			add_action(
				'admin_notices',
				function () {
					?>
					<div class="notice notice-warning is-dismissible">
						<p>
							<?php esc_html_e( '[unitone WooCommerce integrator] Needs the WooCommerce.', 'unitone-woocommerce-integrator' ); ?>
						</p>
					</div>
					<?php
				}
			);
			return;
		}

		require UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/inc/assets.php';
		require UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/inc/breadcrumbs.php';
		require UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/inc/page-title.php';
		require UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/inc/legacy-template.php';
		require UNITONE_WOOCOMMERCE_INTEGRATOR_PATH . '/inc/templates.php';
	}
}

require_once __DIR__ . '/vendor/autoload.php';
new \UnitoneWoocommerceIntegrator\Bootstrap();
