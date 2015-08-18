<?php
/**
 * BCTheme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage BCTheme
 * @since BCTheme 1.0
 */

add_action( 'init', 'register_my_menus' );

// This theme uses wp_nav_menu() in two locations.

function register_my_menus() {
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
			'secondary'=>__('Secondary Menu')
		)
	);
}


