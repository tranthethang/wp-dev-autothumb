<?php
/**
 * Plugin Name: WP Dev AutoThumb
 * Plugin URI: https://github.com/tranthethang/WP-Dev-AutoThumb
 * Description: Grab images from multi gallery.
 * Version: 1.0
 * Author: tranthethang
 * Author URI: https://github.com/tranthethang
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * WP Dev AutoThumb plugin, Copyright 2019 tranthethang
 * WP Dev AutoThumb is distributed under the terms of the GNU GPL
 *
 * Requires at least: 4.1
 * Tested up to: 5.1.1
 * Text Domain: wp-dev-autothumb
 * Domain Path: /languages/
 *
 * @package WP Dev AutoThumb
 */

define( 'WDA_DIR_PATH', plugin_dir_path( __FILE__ ) );

$autoload = WDA_DIR_PATH . '/vendor/autoload.php';

if ( ! file_exists( $autoload ) ) {
	return;
}
require_once $autoload;

\WPDevAutoThumb\Bootstrap::getInstance();


//try {
//	$container = $containerBuilder->build();
//
//	/** @var \Silence\App $app */
//	$app = $container->get( \Silence\Contract\IApp::class );
//	$app->boot();
//} catch ( \Exception $exception ) {
//	var_dump( $exception );
//	die();
//}


