<?php

function aquacell_script() {
    wp_enqueue_style('main-aquacell', get_template_directory_uri() . '/assets/css/style.min.css', [], '2023', 'all');

    wp_enqueue_script('js-aquacell',get_template_directory_uri() . '/assets/js/main.min.js', [], '2023', true);
}

add_action('wp_enqueue_scripts', 'aquacell_script');


function aquacell() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');


    register_nav_menus([
        'menu-header-left' => 'Меню в шапке лево',
        'menu-header-right' => 'Меню в шапке право',
        'mobile-menu' => 'Мобильное меню',
        'menu-footer-company' => 'Меню в футере компания',
        'menu-footer-industries' => 'Меню в футере отрасли'
    ]);
}
add_action('after_setup_theme', 'aquacell');


if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Настройки темы сайта',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}





require_once get_template_directory() . '/inc/custom-page.php';
require_once get_template_directory() . '/inc/breadcrumbs.php';