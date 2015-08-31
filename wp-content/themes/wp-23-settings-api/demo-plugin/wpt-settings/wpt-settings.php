<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://teamtreehouse.com
 * @since             1.0.0
 * @package           WPT_Settings
 *
 * @wordpress-plugin
 * Plugin Name:       WP Settings Demo Plugin
 * Plugin URI:        http://teamtreehouse.com/
 * Description:       A demo plugin for WordPress Settings API Course
 * Version:           1.0.0
 * Author:            Zac Gordon
 * Author URI:        http://zacgordon.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wptsettingsplugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Plugin_Name();
	$plugin->run();

}
run_plugin_name();


// Create Plugin Options Page
function wpt_add_plugin_page() {

	add_menu_page( 
		__('Settings API Demo Plugin', 'wptsettingsplugin'), 
		__('Settings API', 'wptsettingsplugin'),
		'manage_options',
		'settings-api',
		'wpt_plugin_options_page',
		'dashicons-wordpress',
		76
	);

	// add_submenu_page( 
	// 	'options-general.php',
	// 	__('Settings API Demo Plugin', 'wptsettingsplugin'), 
	// 	__('Settings API', 'wptsettingsplugin'),
	// 	'manage_options',
	// 	'settings-api',
	// 	'wpt_plugin_options_page'
	// );	

}
add_action('admin_menu', 'wpt_add_plugin_page');

function wpt_plugin_options_page() {
?>
<div class="wrap">

	<h2>Plugin Settings</h2>


</div>

<?php
}
