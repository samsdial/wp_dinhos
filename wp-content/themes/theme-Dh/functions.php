<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// liga
add_action('init', 'liga');
function liga() {
    $labels = array(
        'name' => __( 'liga' ),
        'singular_name' => __( 'liga' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Nuevo liga' ),
        'edit_item' => __( 'Editar liga' ),
        'new_item' => __( 'Nuevo liga'),
        'view_item' => __( 'Ver Producto'),
        'search_items' => __( 'Buscar Producto'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-generic',
        'public' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail'),
        'has_archive' => false,
      );
    register_post_type( 'liga' , $args );
}
function theme_prefix_rewrite_flush() {
    flush_rewrite_rules();
}
add_action('init', 'liga');