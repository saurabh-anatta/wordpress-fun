<?php
/**
 * Humann theme functions.
 *
 * @package humann
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme supports.
 */
function humann_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'humann_setup' );

/**
 * Styles everywhere; the scroll-story script only on the front page.
 */
function humann_enqueue_assets() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'humann-style', get_stylesheet_uri(), array(), $version );

	if ( is_front_page() ) {
		wp_enqueue_script(
			'humann-home',
			get_theme_file_uri( 'assets/js/home.js' ),
			array(),
			$version,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'humann_enqueue_assets' );

/**
 * Preload the hero texture so the first paint is red, not white.
 */
function humann_preload_hero() {
	if ( is_front_page() ) {
		printf(
			'<link rel="preload" as="image" href="%s" type="image/webp">' . "\n",
			esc_url( get_theme_file_uri( 'assets/img/hero-texture.webp' ) )
		);
	}
}
add_action( 'wp_head', 'humann_preload_hero', 1 );

/**
 * Pattern category for the home page sections.
 */
function humann_register_pattern_category() {
	register_block_pattern_category( 'humann', array( 'label' => __( 'Humann home', 'humann' ) ) );
}
add_action( 'init', 'humann_register_pattern_category' );

/**
 * Escaped URL of a theme image.
 *
 * @param string $file File name inside assets/img.
 * @return string
 */
function humann_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/img/' . $file ) );
}
