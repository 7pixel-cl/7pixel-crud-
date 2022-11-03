<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://7pixel.cl
 * @since             1.0.0
 * @package           7pixel_Crud
 *
 * @wordpress-plugin
 * Plugin Name:       7Pixel - CRUD
 * Plugin URI:        https://7pixel.cl
 * Description:       Plugin for Making CRUD operations into Database
 * Version:           1.0.0
 * Author:            Marco
 * Author URI:        https://7pixel.cl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       7pixel-crud-
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( '7PIXEL_CRUD__VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-7pixel-crud--activator.php
 */
function activate_7pixel_crud_() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-7pixel-crud--activator.php';
	7pixel_Crud_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-7pixel-crud--deactivator.php
 */
function deactivate_7pixel_crud_() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-7pixel-crud--deactivator.php';
	7pixel_Crud_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_7pixel_crud_' );
register_deactivation_hook( __FILE__, 'deactivate_7pixel_crud_' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-7pixel-crud-.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_7pixel_crud_() {

	$plugin = new 7pixel_Crud();
	$plugin->run();

}
run_7pixel_crud_();
