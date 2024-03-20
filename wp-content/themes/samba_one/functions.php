<?php 

function registerMenu(){

    register_nav_menu('header' , 'main menu');
    register_nav_menu('header-icons', 'icons-social');
}

add_action('after_setup_theme' , 'registerMenu');

