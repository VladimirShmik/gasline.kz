<?php
function install_scripts()
{
    //Подключение CSS
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('main-style', get_stylesheet_uri());

    //подключение JS
    wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', false);
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'install_scripts');

// Объявляем поддержку Woocommerce
add_theme_support('woocommerce');

// Выключаем стили Woocommerce
add_filter ('woocommerce_enqueue_styles', '__return_empty_array');

// Объявляем поддержку изображений
add_theme_support( 'post-thumbnails');

// Регистрируем меню
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Главное меню' ),
            'mobile-menu' => __( 'Мобильное меню' ),
        )
    );
};

// Формы Woocommerce приводим к виду Bootstrap
add_filter('woocommerce_form_field_args', function ($args, $key, $value) {
    $args['input_class'][] = 'form-control';
    $args['class'][] = 'form-group';
    return $args;
}, 10, 3);

// Объявляем поддержку галереи
add_theme_support('wc-product-gallery-slider');

// Убираем zoom-эффект Woocommerce
function remove_image_zoom_support()
{
    remove_theme_support('wc-product-gallery-zoom');
}

add_action('wp', 'remove_image_zoom_support', 100);

