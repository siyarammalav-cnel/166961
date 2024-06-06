<?php
/**
 * AutoParts Online Store: Block Patterns
 *
 * @since AutoParts Online Store 1.0.1
 */

/**
 * Registers block patterns and categories.
 *
 * @since AutoParts Online Store 1.0.1
 *
 * @return void
 */
function autoparts_online_store_register_block_patterns() {
	$block_pattern_categories = array(
		'autoparts-online-store'    => array( 'label' => __( 'AutoParts Online Store', 'autoparts-online-store' ) ),
	);

	$block_pattern_categories = apply_filters( 'autoparts_online_store_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'autoparts_online_store_register_block_patterns', 9 );
