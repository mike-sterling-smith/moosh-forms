<?php
/**
 * Plugin Name:       MooshForms
 * Plugin URI:        https://github.com/username/repo
 * Description:       Basic Contact Form Plugin
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mike Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       moosh-forms
 * Domain Path:       /languages
 *
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define plugin filepath.
if ( ! defined( 'MOOSH_FORMS_FILEPATH' ) ) {
	define( 'MOOSH_FORMS_FILEPATH', __FILE__ );
}

// Define plugin URL.
if ( ! defined( 'MOOSH_FORMS_URL' ) ) {
	define( 'MOOSH_FORMS_URL', plugin_dir_url( __FILE__ ) );
}

// Set plugin version reference.
if ( ! defined( 'MOOSH_FORMS_VERSION' ) ) {
	define( 'MOOSH_FORMS_VERSION', implode( get_file_data( __FILE__, array( 'Version' ), 'plugin' ) ) );
}

require MOOSH_FORMS_FILEPATH . 'includes/class-moosh-forms.php';

$moosh_forms = new Moosh_Forms();

$moosh_forms->run();
