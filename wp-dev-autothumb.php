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

$autoload = plugin_dir_path( 'vendor/autoload.php' );
if ( file_exists( $autoload ) ) {
	require_once $autoload;
}