<?php
function mega_menu_setup() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'mega-menu'),
    ]);
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mega_menu_setup');

function mega_menu_enqueue() {
    wp_enqueue_style('mega-menu-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mega_menu_enqueue');
