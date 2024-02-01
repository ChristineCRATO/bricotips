<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://openclassrooms.com/
 * @since             1.0.0
 * @package           Bricotips_Top_Contact
 *
 * @wordpress-plugin
 * Plugin Name:       BricotipsTopContact
 * Plugin URI:        https://openclassrooms.com/
 * Description:       Barre de contact Bricotips
 * Version:           1.0.0
 * Author:            Mr Brico
 * Author URI:        https://openclassrooms.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bricotips-top-contact
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
define( 'BRICOTIPS_TOP_CONTACT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bricotips-top-contact-activator.php
 */
function activate_bricotips_top_contact() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bricotips-top-contact-activator.php';
	Bricotips_Top_Contact_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bricotips-top-contact-deactivator.php
 */
function deactivate_bricotips_top_contact() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bricotips-top-contact-deactivator.php';
	Bricotips_Top_Contact_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bricotips_top_contact' );
register_deactivation_hook( __FILE__, 'deactivate_bricotips_top_contact' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bricotips-top-contact.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bricotips_top_contact() {

	$plugin = new Bricotips_Top_Contact();
	$plugin->run();

}
run_bricotips_top_contact();
