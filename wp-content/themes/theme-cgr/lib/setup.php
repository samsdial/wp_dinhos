<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
    wp_enqueue_style('slick/css', ('https://unpkg.com/slick-carousel@1.7.1/slick/slick.css'), false, null);
    wp_enqueue_style('slick-theme/css', ('https://unpkg.com/slick-carousel@1.7.1/slick/slick-theme.css'), false, null);
    wp_enqueue_style('bootrapp/css', ('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'), false, null);
    wp_enqueue_style('sage/css', Assets\asset_path('styles/style.css'), false, null);
    wp_enqueue_style('normalize/css', Assets\asset_path('styles/normalize.css'), false, null);
    wp_enqueue_style('fonts-one', ('https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700'), false, null);
    wp_enqueue_style('fonts-two', ('https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700'), false, null);
    wp_enqueue_script('modernizr/js', Assets\asset_path('scripts/modernizr.js'), ['jquery'], null, true);
    wp_enqueue_script('jquery/js', Assets\asset_path('scripts/jquery-2.1.1.js'), ['jquery'], null, true);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script('slick/js', Assets\asset_path('scripts/slick.min.js'), ['jquery'], null, true);
    wp_enqueue_script('bootstrap/js', ('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'), ['jquery'], null, true);
    wp_enqueue_script('mousewheel/js', ('https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js'), ['jquery'], null, true);
    wp_enqueue_script('menu-aim/js', Assets\asset_path('scripts/jquery.menu-aim.js'), ['jquery'], null, true);
    wp_enqueue_script('classie/js', Assets\asset_path('scripts/classie.js'), ['jquery'], null, true);
    wp_enqueue_script('main/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
    wp_enqueue_script('sage/js', Assets\asset_path('scripts/custom.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

/**
 * Functions for Post Type 'Nueva Inglaterra'
 *
 * @since Nueva Inglaterra 1.0
 */

if ( function_exists('acf_add_options_page') ) {
    $page = acf_add_options_page(array(
        'page_title'    => __('Configuration General CGR', 'cgr'),
        'menu_title'    => __('Home CGR', 'cgr'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'manage_options',
        'redirect'  => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => __('Configuracion Slider (Principal)', 'cgr'),
        'menu_title' => __('Configuracion Slider (Principal)', 'cgr'),
        'menu_slug' => 'theme-slider-main-configuration',
        'capability' => 'manage_options',
        'parent_slug' => 'theme-general-settings',
        'position' => false,
        'icon_url' => false,
    ));

    acf_add_options_sub_page(array(
        'page_title' => __('Configuracion Intro', 'cgr'),
        'menu_title' => __('Configuracion Intro', 'cgr'),
        'menu_slug' => 'theme-service-configuration',
        'capability' => 'manage_options',
        'parent_slug' => 'theme-general-settings',
        'position' => false,
        'icon_url' => false,
    ));
    acf_add_options_sub_page(array(
        'page_title' => __('Configuracion Nosotros', 'cgr'),
        'menu_title' => __('Configuracion Nosotros', 'cgr'),
        'menu_slug' => 'theme-service',
        'capability' => 'manage_options',
        'parent_slug' => 'theme-general-settings',
        'position' => false,
        'icon_url' => false,
    ));
}

// Cropping

if ( function_exists( 'add_theme_support' ) ) {
    add_image_size( 'banner-main', 1920, 500, true );
}
