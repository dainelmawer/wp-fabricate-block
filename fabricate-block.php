<?php
/**
 * Plugin Name: Fabricate Gutenberg Block
 * Plugin URI: https://github.com/dainemawer/wp-fabricate-block
 * Description: Outputs a barebones Gutenberg Block thats Webpack & ES6 compatible
 * Version: 0.0.1
 * Author: Daine Mawer
 * Author URI: https://dainelindleymawer.me
 * Text Domain: fabricate-block
 * Domain Path: /languages
 *
 * @package DaineMawer\FWB_Fabricate
 */
 if ( ! defined( 'FWB_MIGRATION_VERSION' ) ) {
	define( 'FWB_MIGRATION_VERSION', '0.0.1' );
	define( 'FWB_MIGRATION_COMMANDS_PATH', 'includes/commands/' );
 }

// Only load this plugin once and bail if WP CLI is not present
if (  ! defined( 'WP_CLI' ) ) {
	return;
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once( 'vendor/autoload.php' );
}
