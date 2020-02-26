<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/Colling-Media
 * @since      1.0.0
 *
 * @package    Wp_Trucking_Board
 * @subpackage Wp_Trucking_Board/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Trucking_Board
 * @subpackage Wp_Trucking_Board/includes
 * @author     Collign Media <plugins@collingmedia.com>
 */
class Wp_Trucking_Board_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-trucking-board',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
