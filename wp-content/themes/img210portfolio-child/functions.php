<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

function register_my_menus()
{
    register_nav_menus(
        array(
            'footer-menu' => __('Footer Menu'),
            'extra-menu' => __('Extra Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

/**
 * Enqueue a script
 */
function myprefix_enqueue_scripts()
{
    wp_enqueue_script('nav-slide', get_template_directory_uri() . '/js/nav-slide.js', array(), true);
}
add_action('wp_enqueue_scripts', 'myprefix_enqueue_scripts');
