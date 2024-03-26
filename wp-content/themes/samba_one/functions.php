<?php 

function registerMenu(){

    register_nav_menu('header' , 'main menu');
    register_nav_menu('header-icons', 'icons-social');
    register_nav_menu('navigation', 'menu-navigation');
}

add_action('after_setup_theme' , 'registerMenu');

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

register_sidebar ( array (
    'id' => 'blog-sibar', 'name' => 'competences'
));