<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://avalonhosting.services
<<<<<<< HEAD
 * @since             1.0.0
=======
 * @since             4.9.5
>>>>>>> a27bb71... RC Version
 * @package           Firebase
 *
 * @wordpress-plugin
 * Plugin Name:       Firebase Plugin for WordPress
 * Plugin URI:        https://avalonhosting.services/wp-firebase/
 * Description:       A firebase communication plugin for coziya.com.
<<<<<<< HEAD
 * Version:           1.0.0
=======
 * Version:           4.9.5
>>>>>>> a27bb71... RC Version
 * Author:            Arif Ahmed Joy
 * Author URI:        https://avalonhosting.services/
 * License:           MIT
 * License URI:       /licence.txt
 * Text Domain:       firebase
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
<<<<<<< HEAD
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FIREBASE', '1.0.0' );
=======
 * Start at version 4.9.5 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FIREBASE', '4.9.5' );
>>>>>>> a27bb71... RC Version

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-firebase-activator.php
 */
function activate_firebase() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-firebase-activator.php';
	firebase_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-firebase-deactivator.php
 */
function deactivate_firebase() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-firebase-deactivator.php';
	firebase_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_firebase' );
register_deactivation_hook( __FILE__, 'deactivate_firebase' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-firebase.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
<<<<<<< HEAD
 * @since    1.0.0
=======
 * @since    4.9.5
>>>>>>> a27bb71... RC Version
 */
function run_firebase() {

	$plugin = new firebase();
	$plugin->run();

}
run_firebase();
