<?php
/**
 * AutoParts Online Store functions and definitions
 *
 * @package AutoParts Online Store
 */

if ( ! function_exists( 'autoparts_online_store_setup' ) ) :
function autoparts_online_store_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	add_filter( 'should_load_separate_core_block_assets', '__return_false' );
	
}
endif; // autoparts_online_store_setup
add_action( 'after_setup_theme', 'autoparts_online_store_setup' );

function autoparts_online_store_scripts() {
	wp_enqueue_style( 'autoparts-online-store-basic-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'autoparts_online_store_scripts' );

// Block Patterns.
require get_template_directory() . '/block-patterns.php';
/**
 * Load core file
 */
require get_theme_file_path() . '/inc/core/init.php';

/**
 * Theme info
 */
require get_theme_file_path( '/inc/theme-info/theme-info.php' );

/**
 * Getting started notification
 */
require get_theme_file_path( '/inc/getting-started/getting-started.php' );
