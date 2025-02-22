<?php

/**
 * mighty_plumbers: Block Patterns
 *
 * @since mighty_plumbers 1.0.0
 */

/**
 * Registers pattern categories for mighty_plumbers
 *
 * @since mighty_plumbers 1.0.0
 *
 * @return void
 */
function mighty_plumbers_register_pattern_category()
{
	$block_pattern_categories = array(
		'mighty-plumbers' => array('label' => __('Mighty plumbers Sections', 'mighty-plumbers')),
		'mighty-plumbers-home' => array('label' => __('Mighty plumbers Home Pages', 'mighty-plumbers')),
		'mighty-plumbers-contact' => array('label' => __('Mighty plumbers Contact Us Pages', 'mighty-plumbers')),
		'mighty-plumbers-services' => array('label' => __('Mighty plumbers Service Pages', 'mighty-plumbers')),
		'mighty-plumbers-about' => array('label' => __('Mighty plumbers About Us Pages', 'mighty-plumbers'))
	);

	$block_pattern_categories = apply_filters('mighty_plumbers_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'mighty_plumbers_register_pattern_category', 9);
