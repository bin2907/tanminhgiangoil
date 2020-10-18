<?php
add_theme_support( 'post-thumbnails' );

function register_lang_menu() {
    register_nav_menu('lang_menu',__( 'Lang Menu' ));
}
add_action( 'init', 'register_lang_menu' );


function tn_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );
register_nav_menu('primary-menu',__('Primary-Menu','huybui'));
register_nav_menu('primary-menu-vi',__('Primary-Menu-Vi','huybui'));

register_nav_menu('right-menu-vi',__('Right-Menu-Vi','huybui'));
register_nav_menu('right-menu',__('Right-Menu','huybui'));   

function logo_custom_skipCrop() {
    
    remove_theme_support( 'custom-logo' );

    add_theme_support( 'custom-logo', array(
        'flex-width'  => true,
        'flex-height' => true,
    ) );
}
add_action( 'after_setup_theme', 'logo_custom_skipCrop');
?>