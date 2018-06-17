<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://tsz-dev.com
 * @since             1.0.0
 * @package           Call_Or_Contact
 *
 * @wordpress-plugin
 * Plugin Name:       call or contact
 * Plugin URI:        https://github.com/tsz1412/click-or-contact.git
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Tsviel Zaikman
 * Author URI:        https://tsz-dev.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       call-or-contact
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-call-or-contact-activator.php
 */
function activate_call_or_contact() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-call-or-contact-activator.php';
	Call_Or_Contact_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-call-or-contact-deactivator.php
 */
function deactivate_call_or_contact() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-call-or-contact-deactivator.php';
	Call_Or_Contact_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_call_or_contact' );
register_deactivation_hook( __FILE__, 'deactivate_call_or_contact' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-call-or-contact.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_call_or_contact() {

	$plugin = new Call_Or_Contact();
	$plugin->run();

}
run_call_or_contact();
