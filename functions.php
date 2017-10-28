<?php
/**
 * Storefront Halloween Theme engine room
 *
 * @package Storefront Halloween Theme
 */

/**
 * Set the theme version number as a global variable
 */
$theme                              = wp_get_theme( 'storefront-halloween-theme' );
$storefront_halloween_theme_version = $theme['Version'];

$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Load the individual classes required by this theme
 */
require_once( 'inc/class-storefront-halloween.php' );
require_once( 'inc/class-storefront-halloween-customizer.php' );
require_once( 'inc/storefront-halloween-template-hooks.php' );
require_once( 'inc/storefront-halloween-template-functions.php' );

/**
 * Do not add custom code / snippets here.
 * While Child Themes are generally recommended for customisations, in this case it is not
 * wise. Modifying this file means that your changes will be lost when an automatic update
 * of this theme is performed. Instead, add your customisations to a plugin such as
 * https://github.com/woothemes/theme-customisations
 */
