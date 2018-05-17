<?php
/*
plugin Name: Ligas y Torneos Post Types
plugin URI:
Description: Agregar Custom Post Types Al sitio
Version: 1.0
Author: Sergio Martinez
Author URI:
license: GLP2
license URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
 
 
function competition() {
    $labels = array(

        'name' => __( 'Competición' ),
        'singular_name' => __( 'Competicion' ),
        'add_new' => __( 'Añadir Nueva Competicion' ),
        'add_new_item' => __( 'Añadir Nueva Competicion' ),
        'edit_item' => __( 'Editar Competicion' ),
        'new_item' => __( 'Nueva Competicion'),
        'view_item' => __( 'Ver Competicion'),
        'search_items' => __( 'Buscar Competicion'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-awards',
        'public' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        /*'taxonomies' => array( 'category' ),*/
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'competition' , $args );
}
add_action('init', 'competition');
