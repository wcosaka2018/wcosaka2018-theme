<?php
/**
 * Components functions and definitions.
 *
 * @package wordcamp_japan_theme
 */

/**
 * Add stylesheets.
 */
function wordcamp_japan_theme_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'wordcamp-japan-theme-style', get_stylesheet_directory_uri() . '/css/wordcamp-japan-theme.css', array( 'parent-style' ) );
}

add_action( 'wp_enqueue_scripts', 'wordcamp_japan_theme_style' );
