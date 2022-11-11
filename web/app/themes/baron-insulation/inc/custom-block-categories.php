<?php
/**
 * Create a custom block category for posts only.
 *
 * @param   array $categories     List of block categories.
 * @return  array
 */
if ( version_compare( $GLOBALS['wp_version'], '5.8-alpha-1', '<' ) ) {
	add_filter( 'block_categories', 'baron_insulation_add_block_category', 10, 2 );
} else {
	add_filter( 'block_categories_all', 'baron_insulation_add_block_category', 10, 2 );
}

/**
 * Adding a new (custom) block category.
 *
 * @param   array                   $block_categories       Array of categories for block types.
 * @param   WP_Block_Editor_Context $block_editor_context   The current block editor context.
 */
function baron_insulation_add_block_category( $block_categories, $block_editor_context ) {
	return array_merge(
		$block_categories,
		array(
			array(
				'slug'  => 'custom_modules',
				'title' => __( 'Custom Modules', 'baron-insulation' ),
			),
		)
	);
}