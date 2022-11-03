<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://7pixel.cl
 * @since      1.0.0
 *
 * @package    7pixel_Crud
 * @subpackage 7pixel_Crud/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    7pixel_Crud
 * @subpackage 7pixel_Crud/includes
 * @author     Marco <hola@7pixel.cl>
 */
class 7pixel_Crud_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'7pixel-crud-',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
