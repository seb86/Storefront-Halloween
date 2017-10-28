<?php
/**
 * Storefront_Halloween_Theme_Customizer Class
 * Makes adjustments to Storefront cores Customizer implementation.
 *
 * @author  Sébastien Dumont
 * @package BoilWP Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Storefront_Halloween_Theme_Customizer' ) ) {
	/**
	 * The Storefront_Halloween_Theme Customizer class
	 */
	class Storefront_Halloween_Theme_Customizer {

		/**
		 * Setup class.
		 *
		 * @global $storefront_version
		 * @since  1.0.0
		 */
		public function __construct() {
			global $storefront_version;

			add_action( 'wp_enqueue_scripts',                array( $this, 'add_customizer_css' ),    999 );
			add_action( 'customize_register',                array( $this, 'edit_default_controls' ), 99 );
			add_filter( 'storefront_setting_default_values', array( $this, 'storefront_halloween_theme_defaults' ) );
		}

		/**
		 * Returns an array of the desired default Storefront options
		 *
		 * @access public
		 * @param  array $args an array of default values.
		 * @return array
		 */
		public function storefront_halloween_theme_defaults( $args ) {
			// Storefront
			$args['background_color']                       = '#000';
			$args['storefront_heading_color']               = '#333333';
			$args['storefront_text_color']                  = '#3a3a3a';
			$args['storefront_accent_color']                = '#f37d0e';
			$args['storefront_header_background_color']     = '#f37d0e';
			$args['storefront_header_text_color']           = '#ffffff';
			$args['storefront_header_link_color']           = '#ffffff';
			$args['storefront_footer_background_color']     = '#f4f4f4';
			$args['storefront_footer_heading_color']        = '#333333';
			$args['storefront_footer_text_color']           = '#444444';
			$args['storefront_footer_link_color']           = '#f37d0e';
			$args['storefront_accent_color']                = '#FFA200';
			$args['storefront_button_background_color']     = '#f37d0e';
			$args['storefront_button_text_color']           = '#ffffff';
			$args['storefront_button_alt_background_color'] = '#f37d0e';
			$args['storefront_button_alt_text_color']       = '#ffffff';

			// Storefront Footer Bar
			$args['sfb_background_color']                   = '#ffffff';
			$args['sfb_heading_color']                      = '#ffffff';
			$args['sfb_text_color']                         = '#3a3a3a';
			$args['sfb_link_color']                         = '#f37d0e';

			return apply_filters( 'storefront_halloween_theme_customizer_defaults', $args );
		} // END storefront_halloween_theme_defaults()

		/**
		 * Modify the default controls
		 *
		 * @access public
		 * @param  array $wp_customize the Customizer object.
		 * @return void
		 */
		public function edit_default_controls( $wp_customize ) {
			$wp_customize->get_setting( 'storefront_header_text_color' )->transport = 'refresh';
		} // END edit_default_controls()

		/**
		 * Add CSS using settings obtained from the theme options.
		 *
		 * @access public
		 * @return void
		 */
		public function add_customizer_css() {
			$header_text_color = get_theme_mod( 'storefront_header_text_color' );

			$style = '
				.site-header {
					color: ' . $header_text_color . ';
				}';

			wp_add_inline_style( 'storefront-halloween-style', $style );
		} // END add_customizer_css()

	} // END class

} // END if class exists

return new Storefront_Halloween_Theme_Customizer();
