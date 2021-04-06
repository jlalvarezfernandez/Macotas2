<?php
/***************/
/* FICHERO METABOXES */
/***************/

/*  
 * 
 * Fundación: campos que va a tener cada fundación que creeemos  
 */

if ( ! function_exists('Fundacion') ) {

    // Register Custom Post Type
    function Fundacion() {
    
        $labels = array(
            'name'                  => _x( 'Fundaciones', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Fundacion', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Fundacion', 'text_domain' ),
            'name_admin_bar'        => __( 'Fundacion', 'text_domain' ),
            'archives'              => __( 'Archivo de fundaciones', 'text_domain' ),
            'attributes'            => __( 'Atributos de fundaciones', 'text_domain' ),
            'parent_item_colon'     => __( 'Fundacion padre', 'text_domain' ),
            'all_items'             => __( 'Todas las fundaciones', 'text_domain' ),
            'add_new_item'          => __( 'Añadir nueva fundacion', 'text_domain' ),
            'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
            'new_item'              => __( 'Nueva Fundacion', 'text_domain' ),
            'edit_item'             => __( 'Editar fundacion', 'text_domain' ),
            'update_item'           => __( 'Actualizar fundacion', 'text_domain' ),
            'view_item'             => __( 'Ver fundacion', 'text_domain' ),
            'view_items'            => __( 'Ver fundaciones', 'text_domain' ),
            'search_items'          => __( 'Buscar fundaciones', 'text_domain' ),
            'not_found'             => __( 'No Encontrado', 'text_domain' ),
            'not_found_in_trash'    => __( 'No Encontrado en la papelera', 'text_domain' ),
            'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
            'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
            'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
            'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
            'insert_into_item'      => __( 'Insertar en la fundacion', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Actualizar en esa fundacion', 'text_domain' ),
            'items_list'            => __( 'Listado de fundaciones', 'text_domain' ),
            'items_list_navigation' => __( 'Lista navegable de fundaciones', 'text_domain' ),
            'filter_items_list'     => __( 'Filtro de lista de fundaciones', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Fundacion', 'text_domain' ),
            'description'           => __( 'Fundaciones de adopcion', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-home',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'Fundacion', $args );
    
    }
    add_action( 'init', 'Fundacion', 0 );
    
    }
    
?>