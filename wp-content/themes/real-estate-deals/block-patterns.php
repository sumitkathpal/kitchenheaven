<?php
/**
 * Real Estate Deals: Block Patterns
 *
 * @since Real Estate Deals 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Real Estate Deals 1.0
 *
 * @return void
 */
function real_estate_deals_register_block_patterns() {
	$block_pattern_categories = array(
		'real-estate-deals'    => array( 'label' => __( 'Real Estate Deals', 'real-estate-deals' ) ),
	);

	$block_pattern_categories = apply_filters( 'real_estate_deals_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'real_estate_deals_register_block_patterns', 9 );
