<?php
/**
 * Plugin Name: Testimonials Press
 * Plugin URI: https://testimonials.press/
 * Description: Testimonials Press allows you to add a testimonials slider to your WordPress block editor.
 * Author: Muhammad Muhsin
 * Author URI: https://testimonials.press/
 * Version: 1.2.4
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @package GTS
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
