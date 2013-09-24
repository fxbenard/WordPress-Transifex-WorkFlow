<?php
/**
 * The Transifex Workflow Plugin.
 *
 * @package   TX_Workflow
 * @author    FxB | fxbenard <fxb@wp-translations.org>
 * @license   GPL-2.0+
 * @link      http://wp-translations.org
 * @copyright 2013 WP-Translations
 *
 * @wordpress-plugin
 * Plugin Name: TX Workflow
 * Plugin URI:  http://wp-translations.org
 * Description: A plugin to only show how to include Transifex in your development workflow
 * Version:     1.0.0
 * Author:      FxB | fxbenard
 * Author URI:  http://wp-translations.org
 * Text Domain: tx-workflow
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-tx-workflow.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'TX_Workflow', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'TX_Workflow', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'TX_Workflow', 'get_instance' ) );
