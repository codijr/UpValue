<?php
    function create_testimonial_cpt() {

        $labels = array(
            'name' => _x( 'depoimentos', 'Post Type General Name', 'textdomain' ),
            'singular_name' => _x( 'depoimento', 'Post Type Singular Name', 'textdomain' ),
            'menu_name' => _x( 'Depoimentos', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar' => _x( 'depoimento', 'Add New on Toolbar', 'textdomain' ),
            'archives' => __( 'Arquivos de depoimento', 'textdomain' ),
            'attributes' => __( 'Atributos de depoimento', 'textdomain' ),
            'parent_item_colon' => __( 'Parent depoimento:', 'textdomain' ),
            'all_items' => __( 'Todos os depoimentos', 'textdomain' ),
            'add_new_item' => __( 'Adicionar novo depoimento', 'textdomain' ),
            'add_new' => __( 'Adicionar novo depoimento', 'textdomain' ),
            'new_item' => __( 'Novo depoimento', 'textdomain' ),
            'edit_item' => __( 'Editar depoimento', 'textdomain' ),
            'update_item' => __( 'Atualizar depoimento', 'textdomain' ),
            'view_item' => __( 'Ver depoimento', 'textdomain' ),
            'view_items' => __( 'Ver depoimentos', 'textdomain' ),
            'search_items' => __( 'Pesquisar depoimentos', 'textdomain' ),
            'not_found' => __( 'Não encontrado', 'textdomain' ),
            'not_found_in_trash' => __( 'Não encontrado na lixeira', 'textdomain' ),
            'featured_image' => __( 'Imagem de destaque', 'textdomain' ),
            'set_featured_image' => __( 'Mudar imagem de destaque', 'textdomain' ),
            'remove_featured_image' => __( 'Remover imagem de destaque', 'textdomain' ),
            'use_featured_image' => __( 'Usar como imagem de destaque', 'textdomain' ),
            'insert_into_item' => __( 'Inserir em depoimento', 'textdomain' ),
            'uploaded_to_this_item' => __( 'Carregar neste depoimento', 'textdomain' ),
            'items_list' => __( 'Lista de depoimentos', 'textdomain' ),
            'items_list_navigation' => __( 'Navegar na lista de depoimentos', 'textdomain' ),
            'filter_items_list' => __( 'Filtrar lista de depoimentos', 'textdomain' ),
        );
        $args = array(
            'label' => __( 'depoimento', 'textdomain' ),
            'description' => __('Adicione depoimentos de clientes da UpValue', 'textdomain' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-testimonial',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 20,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type( 'depoimentos', $args );

    }
    add_action( 'init', 'create_testimonial_cpt');
?>