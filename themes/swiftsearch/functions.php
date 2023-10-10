<?php
/**
 * This file adds functions to the Swift Search WordPress theme.
 *
 * @package Swift Search
 * @author  WP Engine
 * @license GNU General Public License v2 or later
 * @link    https://swiftsearchwp.com/
 */

if ( ! function_exists( 'swiftsearch_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function swiftsearch_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'swiftsearch', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'swiftsearch_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'swiftsearch_enqueue_style_sheet' );
function swiftsearch_enqueue_style_sheet() {

	wp_enqueue_style( 'swiftsearch', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function swiftsearch_register_block_styles() {

	$block_styles = array(
		'core/columns'         => array(
			'columns-reverse' => __( 'Reverse', 'swiftsearch' ),
		),
		'core/group'           => array(
			'shadow-light' => __( 'Shadow', 'swiftsearch' ),
			'shadow-solid' => __( 'Solid', 'swiftsearch' ),
		),
		'core/image'           => array(
			'shadow-light' => __( 'Shadow', 'swiftsearch' ),
			'shadow-solid' => __( 'Solid', 'swiftsearch' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'swiftsearch' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'swiftsearch' ),
		),
		'core/quote'           => array(
			'shadow-light' => __( 'Shadow', 'swiftsearch' ),
			'shadow-solid' => __( 'Solid', 'swiftsearch' ),
		),
		'core/social-links'    => array(
			'outline' => __( 'Outline', 'swiftsearch' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'swiftsearch_register_block_styles' );
