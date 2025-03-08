<?php

if (!defined('ABSPATH')) {
    exit;
}


if (!function_exists('ostadfood_enqueue_scripts')) {


    function ostadfood_enqueue_scripts()
    {

        wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css');
        wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/vendors/animate/animate.css');
        wp_enqueue_style('foodhut-main-styles', get_template_directory_uri() . '/assets/css/foodhut.css');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js', array(), null, true);
        wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap-affix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', array('jquery'), null, true);
        wp_enqueue_script('wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array(), null, true);
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap', array(), null, true);
        wp_enqueue_script('foodhut-js', get_template_directory_uri() . '/assets/js/foodhut.js', array('jquery'), null, true);

    }

    add_action('wp_enqueue_scripts', 'ostadfood_enqueue_scripts');

}


function ostadfood_theme_support()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on exdos, use a find and replace
     * to change 'exdos' to the name of your theme in all the template files
     */
    load_theme_textdomain('exdos', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded  tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support('post-thumbnails');

    // set_post_thumbnail_size( 825, 510, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'exdos'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'image',
        'video',
        'quote',
        'gallery',
        'audio'
    ));

    add_theme_support('custom-logo', array(
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true
    ));

    remove_theme_support('widgets-block-editor');

}

add_action('after_setup_theme', 'ostadfood_theme_support');

add_filter('use_block_editor_for_post', '__return_false');