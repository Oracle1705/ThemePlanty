<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent BlankSlate
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}

register_nav_menu('header', 'en tête du menu');
register_nav_menu('footer', 'Pied de page');

/****FONCTION ADMIN ********/

function my_wp_nav_menu_args($args = '')
{
    if (is_user_logged_in()) {
        // Logged in menu to display
        $args['menu'] = 8;
    } else {
        // Non-logged-in menu to display
        $args['menu'] = 25;
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');
