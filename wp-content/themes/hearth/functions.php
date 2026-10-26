<?php
/**
 * Hearth theme functions.
 *
 * @package hearth
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme supports.
 */
function hearth_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hearth_setup' );

/**
 * Front-end stylesheet (extras beyond theme.json).
 */
function hearth_enqueue_styles() {
	wp_enqueue_style(
		'hearth-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'hearth_enqueue_styles' );

/**
 * Pattern category for the home page sections.
 */
function hearth_register_pattern_category() {
	register_block_pattern_category(
		'hearth',
		array( 'label' => __( 'Hearth', 'hearth' ) )
	);
}
add_action( 'init', 'hearth_register_pattern_category' );

/**
 * URL of an image bundled with the theme.
 *
 * @param string $file File name inside assets/images.
 * @return string Escaped URL.
 */
function hearth_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
