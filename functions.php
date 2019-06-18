<?php
add_theme_support( 'post-thumbnails' );

function register_lang_menu() {
    register_nav_menu('lang_menu',__( 'Lang Menu' ));
}
add_action( 'init', 'register_lang_menu' );
?>