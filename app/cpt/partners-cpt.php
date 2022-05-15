<?php
    function create_partners_cpt() {

        $labels = array(
            'name' => _x( 'parceiros', 'Post Type General Name', 'textdomain' ),
            'singular_name' => _x( 'parceiro', 'Post Type Singular Name', 'textdomain' ),
            'menu_name' => _x( 'Parceiros', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar' => _x( 'parceiro', 'Add New on Toolbar', 'textdomain' ),
            'archives' => __( 'Arquivos de parceiro', 'textdomain' ),
            'attributes' => __( 'Atributos de parceiro', 'textdomain' ),
            'parent_item_colon' => __( 'Parent parceiro:', 'textdomain' ),
            'all_items' => __( 'Todos os parceiros', 'textdomain' ),
            'add_new_item' => __( 'Adicionar novo parceiro', 'textdomain' ),
            'add_new' => __( 'Adicionar novo parceiro', 'textdomain' ),
            'new_item' => __( 'Novo parceiro', 'textdomain' ),
            'edit_item' => __( 'Editar parceiro', 'textdomain' ),
            'update_item' => __( 'Atualizar parceiro', 'textdomain' ),
            'view_item' => __( 'Ver parceiro', 'textdomain' ),
            'view_items' => __( 'Ver parceiros', 'textdomain' ),
            'search_items' => __( 'Pesquisar parceiros', 'textdomain' ),
            'not_found' => __( 'Não encontrado', 'textdomain' ),
            'not_found_in_trash' => __( 'Não encontrado na lixeira', 'textdomain' ),
            'featured_image' => __( 'Imagem de destaque', 'textdomain' ),
            'set_featured_image' => __( 'Mudar imagem de destaque', 'textdomain' ),
            'remove_featured_image' => __( 'Remover imagem de destaque', 'textdomain' ),
            'use_featured_image' => __( 'Usar como imagem de destaque', 'textdomain' ),
            'insert_into_item' => __( 'Inserir em parceiro', 'textdomain' ),
            'uploaded_to_this_item' => __( 'Carregar neste parceiro', 'textdomain' ),
            'items_list' => __( 'Lista de parceiros', 'textdomain' ),
            'items_list_navigation' => __( 'Navegar na lista de parceiros', 'textdomain' ),
            'filter_items_list' => __( 'Filtrar lista de parceiros', 'textdomain' ),
        );
        $args = array(
            'label' => __( 'parceiro', 'textdomain' ),
            'description' => __('Adicione parceiros da UpValue', 'textdomain' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-buddicons-buddypress-logo',
            'supports' => array('title', 'thumbnail'),
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
        register_post_type( 'parceiros', $args );

    }
    add_action( 'init', 'create_partners_cpt');
?>