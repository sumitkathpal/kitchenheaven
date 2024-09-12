<?php

/**
 * handyman_blocks: Block Patterns
 *
 * @since handyman_blocks 1.0.0
 */

/**
 * Registers pattern categories for handyman_blocks
 *
 * @since handyman_blocks 1.0.0
 *
 * @return void
 */
function handyman_blocks_register_pattern_category()
{
	$block_pattern_categories = array(
		'handyman-blocks' => array('label' => __('Handyman Blocks Sections', 'handyman-blocks')),
		'handyman-blocks-home' => array('label' => __('Handyman Blocks Home Pages', 'handyman-blocks')),
		'handyman-blocks-contact' => array('label' => __('Handyman Blocks Contact Us Pages', 'handyman-blocks')),
		'handyman-blocks-services' => array('label' => __('Handyman Blocks Service Pages', 'handyman-blocks')),
		'handyman-blocks-about' => array('label' => __('Handyman Blocks About Us Pages', 'handyman-blocks'))
	);

	$block_pattern_categories = apply_filters('handyman_blocks_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'handyman_blocks_register_pattern_category', 9);
