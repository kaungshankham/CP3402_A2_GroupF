<?php
// Theme setup function
function baizonn_learning_center_setup() {
    // Add dynamic title tag support
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'baizonn_learning_center'),
        'footer'  => __('Footer Menu', 'baizonn_learning_center')
    ]);

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Adding support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Add theme support for HTML5 markup: search form, comment form, comment list, gallery, caption
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

    // Add theme support for selective refresh widgets in Customizer
    add_theme_support('customize-selective-refresh-widgets');
}

add_action('after_setup_theme', 'baizonn_learning_center_setup');

// Enqueue scripts and styles
function baizonn_learning_center_scripts_styles() {
    // Enqueue Google Fonts: Josefin Sans
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap', [], null);

    // Main stylesheet
    wp_enqueue_style('baizonn-main-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));

    // Bootstrap CSS for responsive and grid layout
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css', [], '5.1.3');

    // Bootstrap JS and dependencies
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js', ['jquery'], '5.1.3', true);

    // Main JavaScript file (if you have custom JavaScript)
    wp_enqueue_script('baizonn-main-js', get_template_directory_uri() . '/js/main.js', ['jquery'], filemtime(get_template_directory() . '/js/main.js'), true);
}

add_action('wp_enqueue_scripts', 'baizonn_learning_center_scripts_styles');

// Register widget areas
function baizonn_learning_center_widgets_init() {
    register_sidebar([
        'name'          => __('Footer Area', 'baizonn_learning_center'),
        'id'            => 'footer-1',
        'description'   => 'Add widgets here to appear in your footer.',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}

add_action('widgets_init', 'baizonn_learning_center_widgets_init');
