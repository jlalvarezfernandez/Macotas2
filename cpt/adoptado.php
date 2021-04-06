<?php

/***************/
/* FICHERO CPT */
/***************/

/*  
 * 
 * MASCOTA:  este archivo genera el CPT 
 * 
 */

add_action( 'init', 'adopcion_cpt_create' );


function adopcion_cpt_create() {
	$labels = array(
		'name' => __( 'Adoptado'), 
        'singular_name' => __( 'Adoptado' ),
        'add_new' => _x( 'Añadir nuevo', 'adoptado' ),
        'add_new_item' => __( 'Añadir nuevo adoptado'),
        'edit_item' => __( 'Editar adoptado' ),
        'new_item' => __( 'Nuevo adoptado' ),
        'view_item' => __( 'Ver adoptado' ),
        'search_items' => __( 'Buscar adoptado' ),
        'not_found' =>  __( 'No se ha encontrado ningún adoptado' ),
        'not_found_in_trash' => __( 'No se han encontrado adoptado en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array(
        'label' => __('adoptado'),
        'labels' => $labels,
        'public' => true,
        'can_export' => true,
        'show_ui' => true,
        '_builtin' => false,
        'capability_type' => 'post',        
        'hierarchical' => false,
        'rewrite' => array( "slug" => "adoptado" , 'with_front' => true),
        'supports'=> array('title','editor','thumbnail','excerpt') ,
        'show_in_nav_menus' => true,
        'taxonomies' => array( 'adoptado_category'),
        'menu_icon' => 'dashicons-admin-appearance',
        'map_meta_cap' => true,
        'menu_icon'   => 'dashicons-airplane',
        );
 
    register_post_type( 'adoptado', $args ); /* Registramos y a funcionar */
}

