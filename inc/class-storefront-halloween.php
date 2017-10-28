<?php
/**
 * Storefront_Halloween_Theme Class
 *
 * @author  Sébastien Dumont
 * @package BoilWP Theme
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Storefront_Halloween_Theme' ) ) {
	/**
	 * The main Storefront_Halloween_Theme class
	 */
	class Storefront_Halloween_Theme {
		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_action( 'wp_enqueue_scripts',              array( $this, 'storefront_halloween_enqueue_styles' ) );
			add_filter( 'storefront_google_font_families', array( $this, 'storefront_halloween_theme_fonts' ) );
		}

		/**
		 * Enqueue Storefront Styles and BoilWP Styles
		 *
		 * @access public
		 * @global string $storefront_version
		 * @global string $storefront_halloween_theme_version
		 * @return void
		 */
		public function storefront_halloween_enqueue_styles() {
			global $storefront_version, $storefront_halloween_theme_version;

			/**
			 * Styles
			 */
			wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css', $storefront_version );
			wp_style_add_data( 'storefront-child-style', 'rtl', 'replace' );
		} // END storefront_halloween_enqueue_styles()

		/**
		 * Replaces Storefront's default fonts with BoilWP fonts.
		 *
		 * @access public
		 * @param  array $fonts the desired fonts.
		 * @return array $fonts
		 */
		public function storefront_halloween_theme_fonts( $fonts ) {
			$fonts = array(
				'nunito' => 'Nunito:400,400italic,700,900',
			);

			return $fonts;
		} // END storefront_halloween_theme_fonts()

	} // END class

} // END if class exists

return new Storefront_Halloween_Theme();
