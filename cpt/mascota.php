<?php

/***************/
/* FICHERO CPT */
/***************/

/*  
 * 
 * MASCOTA:  este archivo genera el CPT 
 * 
 */

add_action( 'init', 'mascota_cpt_create' );


function mascota_cpt_create() {
	$labels = array(
		'name' => __( 'mascota'), 
        'singular_name' => __( 'mascota' ),
        'add_new' => _x( 'Añadir nuevo', 'mascota' ),
        'add_new_item' => __( 'Añadir nuevo mascota'),
        'edit_item' => __( 'Editar mascota' ),
        'new_item' => __( 'Nuevo mascota' ),
        'view_item' => __( 'Ver mascota' ),
        'search_items' => __( 'Buscar mascota' ),
        'not_found' =>  __( 'No se ha encontrado ningún mascota' ),
        'not_found_in_trash' => __( 'No se han encontrado mascota en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array(
        'label' => __('mascota'),
        'labels' => $labels,
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',        
        'hierarchical' => false,
        'rewrite' => array( "slug" => "mascota" , 'with_front' => true),
        'supports'=> array('title','editor','thumbnail','excerpt') ,
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'mascota_category'),
        'menu_icon' => 'dashicons-admin-appearance',
        'map_meta_cap' => true,
        'menu_icon'   => 'dashicons-pets',
        );
 
    register_post_type( 'mascota', $args ); /* Registramos y a funcionar */
}

