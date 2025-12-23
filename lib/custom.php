<?php
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'   => 'Custom Options',
		'menu_title'  => 'Custom Options',
		'menu_slug'   => 'theme-general-settings',
		'redirect'    => false
	));
};

// Check if Yoast has been installed
function is_yoast_active()
{
	$active_plugins = apply_filters('active_plugins', get_option('active_plugins'));
	foreach ($active_plugins as $plugin) {
		if (strpos($plugin, 'wp-seo')) {
			return true;
		}
	}
}

function move_admin_bar()
{
	if (is_admin_bar_showing()) {
		echo '<style type="text/css">';
		if (wp_is_mobile()) {
			show_admin_bar(false);
			echo 'body {padding-bottom: 0}';
		} else {
			echo 'body {padding-bottom: 32px;}
			body.admin-bar #wphead {padding-top: 0;}
			body.admin-bar #footer {padding-bottom: 32px;}
			#wpadminbar { top: auto !important;bottom: 0;}
			#wpadminbar .quicklinks .menupop .ab-sub-wrapper { bottom: 32px;}
			#wpadminbar .quicklinks .menupop ul { bottom: 0;}
			.admin-bar .header-inner.is-sticky {top: 0;}';
		}
		echo '</style>';
	}
}
add_action('wp_head', 'move_admin_bar');

function include_file($atts)
{
	$a = shortcode_atts(array(
		'name' => 'NULL',
		'title' => '',
		'type' => '',
		'id' => ''
	), $atts);

	if ($a['name'] != 'NULL') {
		$args = array(
			'title' => $a['title'],
			'type' => $a['type'],
			'id' => $a['id']
		);

		ob_start();
		get_template_part('partials/' . $a['name'], null, $args);
		return ob_get_clean();
	}
}
add_shortcode('form', 'include_file');

// Apply to all fields.
// add_filter('acf/load_field', 'my_acf_load_field');

// Apply to select fields.
// add_filter('acf/load_field/type=select', 'my_acf_load_field');

// Apply to field with key "field_123abcf".
// add_filter('acf/load_field/key=field_123abcf', 'my_acf_load_field');

function PREFIX_apply_acf_modifications()
{
?>
	<style>
		.acf-editor-wrap iframe {
			min-height: 0;
		}
	</style>
	<script>
		(function($) {
			acf.add_filter('wysiwyg_tinymce_settings', function(mceInit, id, $field) {
				mceInit.wp_autoresize_on = true;
				return mceInit;
			});
			acf.add_action('wysiwyg_tinymce_init', function(ed, id, mceInit, $field) {
				ed.settings.autoresize_min_height = 100;
				$('.acf-editor-wrap iframe').css('height', '100px');
			});
		})(jQuery)
	</script>
<?php
}
add_action('acf/input/admin_footer', 'PREFIX_apply_acf_modifications');