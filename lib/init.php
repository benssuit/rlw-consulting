<?php
function site_scripts()
{	
	wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime(get_theme_file_path('/assets/css/main.css')));

	wp_enqueue_script('jquery');

	wp_enqueue_script('bundle_js', get_template_directory_uri() . '/assets/js/bundle.js', array(), filemtime(get_theme_file_path('/assets/js/bundle.js')), true);

	wp_localize_script(
		'bundle_js',
		'bundlejs',
		array(
			'ajaxUrl' => admin_url('admin-ajax.php'),
			'nonce'   => wp_create_nonce('ajax-nonce'),
		)
	);
}
add_action('wp_enqueue_scripts', 'site_scripts');

add_theme_support('editor-styles');
add_editor_style('assets/css/editor-style.css');

add_theme_support('admin-bar', array('callback' => '__return_false'));

add_theme_support('menus');

add_theme_support('post-thumbnails');

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter('wpseo_metabox_prio', function () {
	return 'low';
});

add_filter('body_class', 'custom_body_class');
function custom_body_class(array $classes)
{
	$new_class = is_page() ? get_post_meta(get_the_ID(), 'body-class', true) : null;

	if ($new_class) {
		$classes[] = $new_class;
	}

	return $classes;
}

/*Change excerpt length*/
function wpdocs_custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

/*Modify the [...] string*/
function wpdocs_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');

/* Add word counts from the Simple Content block into reading time calculation */
function update_the_count($args)
{
	$content = "";
	$count = $args["count"] ?? 0;
	if (!empty($args["post_id"])) {
		$blocks = parse_blocks(get_the_content(null, false, $args["post_id"]));
		foreach ($blocks as $block) {
			if ($block["blockName"] == "acf/simple-content") :
				$content = wp_strip_all_tags($block["attrs"]["data"]["content"]);
				break;
			endif;
		}
	}
	$field_count = count(preg_split('/\s+/', $content));
	$count += $field_count;

	return $count;
}
add_filter('rtwp_filter_wordcount', 'update_the_count');

function remove_footer_admin()
{
	echo '';
}
add_filter('admin_footer_text', 'remove_footer_admin');

function remove_menu()
{
	remove_submenu_page('themes.php', 'customize.php');
	remove_submenu_page('themes.php', 'site-editor.php?path=/patterns');
}
add_action('admin_menu', 'remove_menu');
