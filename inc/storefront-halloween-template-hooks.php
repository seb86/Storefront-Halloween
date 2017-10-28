<?php
/**
 * Storefront_Halloween_Theme hooks
 *
 * @package Storefront Halloween Theme
 */

add_action( 'init', 'storefront_halloween_theme_hooks' );

/**
 * Add and remove Storefront_Halloween_Theme/Storefront functions.
 *
 * @return void
 */
function storefront_halloween_theme_hooks() {
	add_filter( 'body_class', 'storefront_halloween_body_class' );
}
