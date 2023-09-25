<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class Gn_Ean_Featured_Image_Run
 *
 * Thats where we bring the plugin to life
 *
 * @package		GNEANFEATU
 * @subpackage	Classes/Gn_Ean_Featured_Image_Run
 * @author		George Nicolaou
 * @since		1.0.0
 */
class Gn_Ean_Featured_Image_Run{

	/**
	 * Our Gn_Ean_Featured_Image_Run constructor 
	 * to run the plugin logic.
	 *
	 * @since 1.0.0
	 */
	function __construct(){
		$this->add_hooks();
	}

	/**
	 * ######################
	 * ###
	 * #### WORDPRESS HOOKS
	 * ###
	 * ######################
	 */

	/**
	 * Registers all WordPress and plugin related hooks
	 *
	 * @access	private
	 * @since	1.0.0
	 * @return	void
	 */
	private function add_hooks(){
	
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_backend_scripts_and_styles' ), 20 );
	
	}

	/**
	 * ######################
	 * ###
	 * #### WORDPRESS HOOK CALLBACKS
	 * ###
	 * ######################
	 */

	/**
	 * Enqueue the backend related scripts and styles for this plugin.
	 * All of the added scripts andstyles will be available on every page within the backend.
	 *
	 * @access	public
	 * @since	1.0.0
	 *
	 * @return	void
	 */
	public function enqueue_backend_scripts_and_styles() {
		wp_enqueue_style( 'gneanfeatu-backend-styles', GNEANFEATU_PLUGIN_URL . 'core/includes/assets/css/backend-styles.css', array(), GNEANFEATU_VERSION, 'all' );
	}

}
