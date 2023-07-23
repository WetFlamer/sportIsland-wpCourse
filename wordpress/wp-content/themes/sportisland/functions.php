<?php

require_once(__DIR__ . '/inc/widget-text.php');
require_once(__DIR__ . '/inc/widget-contacts.php');

add_action('after_setup_theme', 'si_setup');
add_action('wp_enqueue_scripts', 'si_scripts');
add_filter('show_admin_bar', '__return_false');
add_action( 'widgets_init', 'si_register' );

function si_setup()
{
    register_nav_menu( 'menu-header', 'Меню в шапке' );
    register_nav_menu( 'menu-footer', 'Меню в подвале' );
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function si_scripts()
{
    wp_enqueue_script(
        'js',
        _si_assets_path('js/js.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_style(
        'si-style',
        _si_assets_path('css/styles.css'),
        [],
        '1.0',
        'all'
    );

}

function si_register() {
    register_sidebar([
        'name' => 'Контакты в шапке сайта',
        'id' => 'si_header',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Контакты в подвале сайта',
        'id' => 'si_footer',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Сайд-бар в футоре - Колонка - 1',
        'id' => 'si_footer-column-1',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Сайд-бар в футоре - Колонка - 2',
        'id' => 'si_footer-column-2',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Сайд-бар в футоре - Колонка - 3',
        'id' => 'si_footer-column-3',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Карта',
        'id' => 'si_map',
        'before_widget' => null,
        'after_widget' => null
    ]);
    register_sidebar([
        'name' => 'Сайдбар под картой',
        'id' => 'si_after-map',
        'before_widget' => null,
        'after_widget' => null
    ]);

    register_widget( 'si_widget_text' );
    register_widget('si_widget_contacts');
}

function _si_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}
?>