<?php

/***************/
/* FICHERO CPT */
/***************/

/*  
 * 
 * PROPIETARIO:  este archivo genera el CPT 
 * 
 */

add_action( 'init', 'propietario_cpt_create' );


function propietario_cpt_create() {
	$labels = array(
		'name' => __( 'Propietario'), 
        'singular_name' => __( 'Propietario' ),
        'add_new' => _x( 'Añadir nuevo', 'propietario' ),
        'add_new_item' => __( 'Añadir nuevo propietario'),
        'edit_item' => __( 'Editar propietario' ),
        'new_item' => __( 'Nuevo propietario' ),
        'view_item' => __( 'Ver propietario' ),
        'search_items' => __( 'Buscar propietario' ),
        'not_found' =>  __( 'No se ha encontrado ningún propietario' ),
        'not_found_in_trash' => __( 'No se han encontrado propietario en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array(
        'label' => __('propietario'),
        'labels' => $labels,
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',        
        'hierarchical' => false,
        'rewrite' => array( "slug" => "propietario" , 'with_front' => true),
        'supports'=> array('title','editor','thumbnail','excerpt') ,
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'propietario_category'),
        'menu_icon' => 'dashicons-admin-appearance',
        'map_meta_cap' => true,
        'menu_icon'   => 'dashicons-businessperson',
        );
 
    register_post_type( 'propietario', $args ); /* Registramos y a funcionar */
}

