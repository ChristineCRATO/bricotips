<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://openclassrooms.com/
 * @since      1.0.0
 *
 * @package    Bricotips_Top_Contact
 * @subpackage Bricotips_Top_Contact/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bricotips_Top_Contact
 * @subpackage Bricotips_Top_Contact/includes
 * @author     Mr Brico <mrbrico@bricotips.fr>
 */
class Bricotips_Top_Contact_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bricotips-top-contact',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
