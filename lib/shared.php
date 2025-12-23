<?php
function register_menus()
{
	register_nav_menus(
		array(
			'main-menu' => __('Header')
		)
	);
}
add_action('init', 'register_menus');

function pre_print_r($obj)
{
	echo '<pre>';
	print_r($obj);
	echo '</pre>';
}
