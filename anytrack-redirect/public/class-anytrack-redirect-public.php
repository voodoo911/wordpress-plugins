<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://anytrack.io
 * @since      0.1.0
 *
 * @package    AnyTrack_Redirect
 * @subpackage AnyTrack_Redirect/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    AnyTrack_Redirect
 * @subpackage AnyTrack_Redirect/public
 */
class AnyTrack_Redirect_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $anytrack_redirect    The ID of this plugin.
	 */
	private $anytrack_redirect;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @param      string    $anytrack_redirect       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $anytrack_redirect, $version ) {

		$this->anytrack_redirect = $anytrack_redirect;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in AnyTrack_Redirect_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The AnyTrack_Redirect_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->anytrack_redirect, plugin_dir_url( __FILE__ ) . 'css/anytrack-redirect-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in AnyTrack_Redirect_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The AnyTrack_Redirect_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->anytrack_redirect, plugin_dir_url( __FILE__ ) . 'js/anytrack-redirect-public.js', array( 'jquery' ), $this->version, false );

	}

}
