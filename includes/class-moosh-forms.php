<?php
/**
 * The file that defines the core plugin class.
 *
 * A class definition that includes attributes and functions used across both the.
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/username/repo
 * @since      1.0.0
 *
 * @package    Moosh_Forms
 * @subpackage Moosh_Forms/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and.
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      0.1.0
 * @package    Moosh_Forms
 * @subpackage Moosh_Forms/includes
 */
class Moosh_Forms {

	public function __construct() {
		$this->laod_plugin_files();
		$this->admin     = new Moosh_Forms_Admin( $this );
		$this->front_end = new Moosh_Forms_Front_End( $this );
	}

	public function load_plugin_files() {
		require_once( MOOSH_FORMS_FILEPATH . 'includes/class-moosh-forms-admin.php' );
		require_once( MOOSH_FORMS_FILEPATH . 'includes/class-moosh-forms-front-end.php' );
	}

	private function register_hooks() {

		// Setup Custom Post Types: Forms & Entries.

		// Setup Admin Menu.

		// Register Shortcodes.

		// Enqueue Scripts: Front end & Backend.

		// Enqueue Styles: Front end & Backend.

	}

}
