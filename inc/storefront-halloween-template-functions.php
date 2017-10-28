<?php
/**
 * Storefront_Halloween_Theme template functions.
 *
 * @package Storefront Halloween Theme
 */

/**
 * Add body classes for Storefront Halloween.
 *
 * @param  array $classes Body Classes.
 * @return array
 */
function storefront_halloween_body_class( $classes ) {
	$classes = (array) $classes;

	// If Halloween Period
	if ( in_array( date( "m.d" ), array( "10.28", "10.29", "10.30", "10.31", "11.01", "11.02" ) ) ) {
		$classes[] = 'halloween';
	}

	return array_unique( $classes );
}
