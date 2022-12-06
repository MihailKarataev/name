<?php
    add_theme_support( 'post-thumbnails' ); 
    
    //ПОДКЛЮЧАЮ СТИЛИ
    add_action( 'wp_enqueue_scripts', 'wp_enqueue_main_style');
    function wp_enqueue_main_style() {
        wp_enqueue_style( 'wp_enqueue_main_style', get_stylesheet_uri());
    }

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

add_filter( 'excerpt_length', function(){
	return 20;
} );
?>