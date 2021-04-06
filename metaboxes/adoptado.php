<?php

/***************/
/* FICHERO METABOXES */
/***************/

/*  
 * 
 * Adopción: campos que va a tener cada adopción que creeemos  
 */
if ( ! function_exists('Adoptado') ) {

    // Register Custom Post Type
    function Adoptado() {
    
        $labels = array(
            'name'                  => _x( 'Adopciones', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Adoptado', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Adopciones', 'text_domain' ),
            'name_admin_bar'        => __( 'Adopciones', 'text_domain' ),
            'archives'              => __( 'Archivo de Adopciones', 'text_domain' ),
            'attributes'            => __( 'Atributos de Adopciones', 'text_domain' ),
            'parent_item_colon'     => __( 'Adopcion padre', 'text_domain' ),
            'all_items'             => __( 'Todas las Adopciones', 'text_domain' ),
            'add_new_item'          => __( 'Añadir nueva adopcion', 'text_domain' ),
            'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
            'new_item'              => __( 'Nueva Adopcion', 'text_domain' ),
            'edit_item'             => __( 'Editar Adopcion', 'text_domain' ),
            'update_item'           => __( 'Actualizar Adopcion', 'text_domain' ),
            'view_item'             => __( 'Ver Adopcion', 'text_domain' ),
            'view_items'            => __( 'Ver Adopciones', 'text_domain' ),
            'search_items'          => __( 'Buscar Adopciones', 'text_domain' ),
            'not_found'             => __( 'No Encontrado', 'text_domain' ),
            'not_found_in_trash'    => __( 'No Encontrado en la papelera', 'text_domain' ),
            'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
            'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
            'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
            'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
            'insert_into_item'      => __( 'Insertar en la Adopcion', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Actualizar en esa Adopcion', 'text_domain' ),
            'items_list'            => __( 'Listado de Adopcion', 'text_domain' ),
            'items_list_navigation' => __( 'Lista navegable de Adopcion', 'text_domain' ),
            'filter_items_list'     => __( 'Filtro de lista de Adopcion', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Adoptado', 'text_domain' ),
            'description'           => __( 'Animales en adopcion', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-airplane',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'Adoptado', $args );
    
    }
    add_action( 'init', 'Adoptado', 0 );
    
    }

?>