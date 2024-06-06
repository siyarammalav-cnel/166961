<?php
/**
 * Block Patterns
 *
 * @since 1.0.0
 */

/**
 * Registers pattern categories for AutoParts Online Store
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoparts_online_store_register_pattern_category() {
	$block_pattern_categories = array(
		'all'      => array( 'label' => __( 'AutoParts Online Store Patterns', 'autoparts-online-store' ) ),
		'home'     => array( 'label' => __( 'Home', 'autoparts-online-store' ) ),
		'pricing'  => array( 'label' => __( 'Pricing Table', 'autoparts-online-store' ) ),
		'callback' => array( 'label' => __( 'Call to Action', 'autoparts-online-store' ) ),
	);

	$block_pattern_categories = apply_filters( 'autoparts_online_store_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}		
	}
}
add_action( 'init', 'autoparts_online_store_register_pattern_category', 9 );


