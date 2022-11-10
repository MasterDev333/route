<?php
/**
 * Astra - ROUTE Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra - ROUTE
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_ROUTE_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-route-theme-normalize-css', get_stylesheet_directory_uri() . '/build/index.css', array('astra-theme-css'), CHILD_THEME_ASTRA_ROUTE_VERSION, 'all' );
	wp_enqueue_style( 'astra-route-theme-main-css', get_stylesheet_directory_uri() . '/build/style-index.css', array('astra-theme-css'), CHILD_THEME_ASTRA_ROUTE_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
