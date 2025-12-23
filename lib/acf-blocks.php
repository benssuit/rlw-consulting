<?php
// ACF Blocks
function register_acf_block_types()
{
	// 288
	acf_register_block_type(array(
		'name'              => 'block-288',
		'title'             => __('Block - 288'),
		'description'       => __('Codestitch 288'),
		'render_template'   => 'blocks/288.php',
		'category'          => 'layout',
		'icon'              => 'list-view',
		'keywords'          => array('Component', 'Codestitch', '288')
	));

	// 2278
	acf_register_block_type(array(
		'name'              => 'block-2278',
		'title'             => __('Block - 2278'),
		'description'       => __('Codestitch 2278'),
		'render_template'   => 'blocks/2278.php',
		'category'          => 'layout',
		'icon'              => 'list-view',
		'keywords'          => array('Component', 'Codestitch', '2278')
	));
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}
