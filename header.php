<?php
$the_title = get_the_title();
$the_description = get_the_excerpt();

if (is_yoast_active()) {
	//$the_title = get_post_meta($post->ID, '_yoast_wpseo_title', true);
	$the_description = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="<?= $the_description ?>">
	<title><?= wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>