<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>


<nav>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'header',
        )
    );
    ?>
</nav>