<?php

/***************/
/* FICHERO CPT */
/***************/

/*  
 * 
 * FUNDACIONES:  este archivo genera el CPT 
 * 
 */

add_action( 'init', 'fundacion_cpt_create' );


function fundacion_cpt_create() {
	$labels = array(
		'name' => __( 'Fundacion'), 
        'singular_name' => __( 'Fundacion' ),
        'add_new' => _x( 'Añadir nuevo', 'fundacion' ),
        'add_new_item' => __( 'Añadir nuevo fundacion'),
        'edit_item' => __( 'Editar fundacion' ),
        'new_item' => __( 'Nuevo fundacion' ),
        'view_item' => __( 'Ver fundacion' ),
        'search_items' => __( 'Buscar fundacion' ),
        'not_found' =>  __( 'No se ha encontrado ningún fundacion' ),
        'not_found_in_trash' => __( 'No se han encontrado fundacion en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array(
        'label' => __('fundacion'),
        'labels' => $labels,
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',        
        'hierarchical' => false,
        'rewrite' => array( "slug" => "fundacion" , 'with_front' => true),
        'supports'=> array('title','editor','thumbnail','excerpt') ,
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'fundacion_category'),
        'menu_icon' => 'dashicons-admin-appearance',
        'map_meta_cap' => true,
        'menu_icon'   => 'dashicons-admin-home',
        );
 
    register_post_type( 'fundacion', $args ); /* Registramos y a funcionar */
}

