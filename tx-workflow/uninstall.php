<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   TX_Workflow
 * @author    FxB | fxbenard <fxb@wp-translations.org>
 * @license   GPL-2.0+
 * @link      http://wp-translations.org
 * @copyright 2013 WP-Translations
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// TODO: Define uninstall functionality here