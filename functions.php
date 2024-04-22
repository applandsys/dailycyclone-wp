<?php

  // https://developer.wordpress.org/reference/functions/add_theme_support/
add_theme_support('title_tag'); 
add_theme_support('custom-logo'); 
add_theme_support('post-thumbnails');   // Post korar time e feature image option asbe


if ( ! function_exists( 'tm_theme_enqueue_styles_scripts' ) ) :
function tm_theme_enqueue_styles_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    $version_string = is_string( $theme_version ) ? $theme_version : false;
    wp_register_style(
        'news-style',
        get_stylesheet_uri(),
        array(),
        $version_string
    );

    wp_register_style(
        'news-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array(),
        $version_string
    );

    wp_register_style(
        'news-breaking',
        get_template_directory_uri() . '/assets/css/breaking-news.css',
        array(),
        $version_string
    );


    // Enqueue theme stylesheet.
    wp_enqueue_style( 'news-style' );
    wp_enqueue_style( 'news-custom' );
    wp_enqueue_style( 'news-breaking' );

    
    // Enqueue theme scripts.
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), $version_string, true ); // key: string, path: string, dependancy: array, version: string, isFooter: boolean

}

endif;

add_action('wp_enqueue_scripts', 'tm_theme_enqueue_styles_scripts'); // Adding a call back function in action hook ex: wp_enquer_scripts is an action hook

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'main-menu-slug' ) );
}

add_action( 'after_setup_theme', 'register_my_menu' );

require_once get_template_directory() . '/inc/login-logo.php';

?>
