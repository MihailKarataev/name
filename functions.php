<?php
    add_theme_support( 'post-thumbnails' ); 
    
    //ПОДКЛЮЧАЮ СТИЛИ
    add_action( 'wp_enqueue_scripts', 'wp_enqueue_main_style');
    function wp_enqueue_main_style() {
        wp_enqueue_style( 'wp_enqueue_main_style', get_stylesheet_uri());
    }

?>