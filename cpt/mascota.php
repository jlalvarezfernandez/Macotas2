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
		'name' => __( 'Mascota'), 
        'singular_name' => __( 'Mascota' ),
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
        'exclude_from_search' => true,
    );
 
    register_post_type( 'mascota', $args ); /* Registramos y a funcionar */
}


function up_generar_mascota(){
    $id = wp_insert_post(array(
      'post_title'=>'New Pet', 
      'post_type'=>'mascota',
    ));

    $random_slug = generate_random_pet_slug($id);
    $my_post = array(
      'ID'           => $id,
      'post_title'   =>  $random_slug,
      'post_name'    =>  $random_slug,
    );
 
    // Update the post into the database
    wp_update_post( $my_post );

    update_post_meta( $id, 'id_slug_mascota', $random_slug);

    $pet = array();

    $pet['id'] = $id;
    $pet['slug'] = $random_slug;

    return $pet;
}


function generate_random_pet_slug($id){
    if ($id == ''){
        return false;
    }    
    return $id . '-' . createRandomPassword();
}


function createRandomPassword() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 8) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

} 
