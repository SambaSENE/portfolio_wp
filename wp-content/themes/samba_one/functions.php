<?php 

function registerMenu(){

    register_nav_menu('header' , 'main menu');
    register_nav_menu('header-icons', 'icons-social');
    register_nav_menu('navigation', 'menu-navigation');
}

add_action('after_setup_theme' , 'registerMenu');

