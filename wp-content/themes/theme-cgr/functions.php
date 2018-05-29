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
add_action('init', 'league');
function league() {
    $labels = array(
        'name' => __( 'Liga' ),
        'singular_name' => __( 'Liga' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Nueva Liga' ),
        'edit_item' => __( 'Editar Liga' ),
        'new_item' => __( 'Nueva Liga'),
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
        'rewrite' => array( 'slug' => 'liga' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'league' , $args );
    flush_rewrite_rules();
}

// Nacionales
add_action('init', 'national');
function national() {
    $labels = array(
        'name' => __( 'Nacionales' ),
        'singular_name' => __( 'Nacionales' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Nueva Nacionales' ),
        'edit_item' => __( 'Editar Nacionales' ),
        'new_item' => __( 'Nueva Nacionales'),
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
        'rewrite' => array( 'slug' => 'nacionales' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'national' , $args );
    flush_rewrite_rules();
}
// Nacionales tournament fede val
add_action('init', 'tournamentFedeVal');
function tournamentFedeVal() {
    $labels = array(
        'name' => __( 'Torneo FedeVal' ),
        'singular_name' => __( 'Torneo FedeVal' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Categoria Torneo FedeVal' ),
        'edit_item' => __( 'Editar Torneo FedeVal' ),
        'new_item' => __( 'Nueva Torneo FedeVal'),
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
        'rewrite' => array( 'slug' => 'torneo_federico_valencia' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'tournamentFedeVal' , $args );
    flush_rewrite_rules();
}
// Torneo maracana
add_action('init', 'maracana');
function maracana() {
    $labels = array(
        'name' => __( 'Torneo Maracaná' ),
        'singular_name' => __( 'Torneo Maracaná' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Categoria Torneo Maracaná' ),
        'edit_item' => __( 'Editar Torneo Maracaná' ),
        'new_item' => __( 'Nueva Torneo Maracaná'),
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
        'rewrite' => array( 'slug' => 'torneo_maracana' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'maracana' , $args );
    flush_rewrite_rules();
}