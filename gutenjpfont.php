<?php
/*
Plugin Name: Japanese Font for Gutenberg (ABANDONED)
Description: Add Japanese font to Gutenberg
Version: 1.1
Author: raspi0124
Author URI: https://raspi-diary.com/
License: GPL2
*/
/**
 * I used create-guten-block (https://github.com/ahmadawais/create-guten-block Under MIT) to minimize the developing time.
 * Thanks to ahmadawais, the author of the tool.
 * Official site of create-guten-block → https://ahmadawais.com/create-guten-block-toolkit/
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
