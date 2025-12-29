<?php
// ACF Blocks
function register_acf_block_types()
{
	// 65 - Reviews
	acf_register_block_type(array(
		'name'              => 'block-65',
		'title'             => __('Block - 65'),
		'description'       => __('Codestitch 65'),
		'render_template'   => 'blocks/65.php',
		'category'          => 'layout',
		'icon'              => 'list-view',
		'keywords'          => array('Component', 'Codestitch', '65')
	));

	// 288 - Hero
	acf_register_block_type(array(
		'name'              => 'block-288',
		'title'             => __('Block - 288'),
		'description'       => __('Codestitch 288'),
		'render_template'   => 'blocks/288.php',
		'category'          => 'layout',
		'icon'              => 'list-view',
		'keywords'          => array('Component', 'Codestitch', '288')
	));

	// 985 - Blog
	acf_register_block_type(array(
		'name'              => 'block-985',
		'title'             => __('Block - 985'),
		'description'       => __('Codestitch 985'),
		'render_template'   => 'blocks/985.php',
		'category'          => 'layout',
		'icon'              => 'list-view',
		'keywords'          => array('Component', 'Codestitch', '985')
	));

	// 1666 - Services
	acf_register_block_type(array(
		'name'              => 'block-1666',
		'title'             => __('Block - 1666'),
		'description'       => __('Codestitch 1666'),
		'render_template'   => 'blocks/1666.php',
		'category'          => 'layout',
		'icon'              => 'list-view',
		'keywords'          => array('Component', 'Codestitch', '1666')
	));

	// 1896 - Logos
	acf_register_block_type(array(
		'name'              => 'block-1896',
		'title'             => __('Block - 1896'),
		'description'       => __('Codestitch 1896'),
		'render_template'   => 'blocks/1896.php',
		'category'          => 'layout',
		'icon'              => 'list-view',
		'keywords'          => array('Component', 'Codestitch', '1896')
	));

	// 2278 - Side By Side
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
