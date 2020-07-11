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

<style type="text/css">
    .sideBarConsultantBg {
        background-image: url("<?php echo get_template_directory_uri(); ?>/img/misc/consultant.jpg") ;
    }
</style>

<?php
	wp_head();
	$slug = $post->post_name; // In used other files.
?>
</head>

<body>

<?php
get_header();

if (get_locale() == "vi") {
    get_template_part( 'template-parts/vi/top-bar');
    get_template_part( 'template-parts/vi/navigation');
} else {
    get_template_part( 'template-parts/top-bar');
    get_template_part( 'template-parts/navigation');
}

?>
