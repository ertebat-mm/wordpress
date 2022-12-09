<?php
/**
 * Plugin Name:       PLUGINNAME
 * Plugin URI:        https://www.ertebatweb.com/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 0.0
 * Requires PHP:      7.4
 * Author:            Muhammad Mehri
 * Author URI:        https://www.ertebatweb.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://www.ertebatweb.com/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

define('WP_PLUGINNAME_URL', plugin_dir_url(__FILE__));
define("WP_PLUGINNAME_DIR", plugin_dir_path(__FILE__));
const WP_PLUGINNAME_INCLUDE = WP_PLUGINNAME_DIR . '/include/';
const WP_PLUGINNAME_TEMPLATE = WP_PLUGINNAME_DIR . '/template/';