<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
<<<<<<< HEAD
 * @link       http://example.com
 * @since      1.0.0
=======
 * @link       https://www.arifahmed.info
 * @since      4.9.5
>>>>>>> a27bb71... RC Version
 *
 * @package    Firebase
 * @subpackage Firebase/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
<<<<<<< HEAD
 * @since      1.0.0
=======
 * @since      4.9.5
>>>>>>> a27bb71... RC Version
 * @package    Firebase
 * @subpackage Firebase/includes
 * @author     Arif Ahmed Joy <arif@avalonhosting.services>
 */
class Firebase_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
<<<<<<< HEAD
	 * @since    1.0.0
=======
	 * @since    4.9.5
>>>>>>> a27bb71... RC Version
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'firebase',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
