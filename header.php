<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title(); ?></title>

<link id="favicon" rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icon/">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<script src="https://kit.fontawesome.com/bdbf254905.js"></script>

<?php
	wp_head();
	$slug = $post->post_name;
?>
</head>

<body>

<?php

if (get_locale() == "vi") {

}


get_template_part( 'template-parts/top-bar'); ?>
<?php get_template_part( 'template-parts/navigation'); ?>
