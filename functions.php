<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

register_nav_menu('header', 'en tête du menu');
register_nav_menu('footer', 'Pied de page');

/****FONCTION ADMIN ********/

/****apply filters_add filters */ {
    if (is_user_logged_in()) {
        //code
    } else {
        //code
    }
}
/**add_filter() / apply_filter()*****/
