<?php
    function create_home_texts_cpt() {

        $labels = array(
            'name' => _x( 'Textos da home', 'Post Type General Name', 'textdomain' ),
            'singular_name' => _x( 'Texto da home', 'Post Type Singular Name', 'textdomain' ),
            'menu_name' => _x( 'Textos da home', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar' => _x( 'texto da home', 'Add New on Toolbar', 'textdomain' ),
            'archives' => __( 'Arquivos de texto da home', 'textdomain' ),
            'attributes' => __( 'Atributos de texto da home', 'textdomain' ),
            'parent_item_colon' => __( 'Parent texto da home:', 'textdomain' ),
            'all_items' => __( 'Todos os textos da home', 'textdomain' ),
            'add_new_item' => __( 'Adicionar novo texto da home', 'textdomain' ),
            'add_new' => __( 'Adicionar novo texto da home', 'textdomain' ),
            'new_item' => __( 'Novo texto da home', 'textdomain' ),
            'edit_item' => __( 'Editar texto da home', 'textdomain' ),
            'update_item' => __( 'Atualizar texto da home', 'textdomain' ),
            'view_item' => __( 'Ver texto da home', 'textdomain' ),
            'view_items' => __( 'Ver textos da home', 'textdomain' ),
            'search_items' => __( 'Pesquisar textos da home', 'textdomain' ),
            'not_found' => __( 'Não encontrado', 'textdomain' ),
            'not_found_in_trash' => __( 'Não encontrado na lixeira', 'textdomain' ),
            'featured_image' => __( 'Imagem de destaque', 'textdomain' ),
            'set_featured_image' => __( 'Mudar imagem de destaque', 'textdomain' ),
            'remove_featured_image' => __( 'Remover imagem de destaque', 'textdomain' ),
            'use_featured_image' => __( 'Usar como imagem de destaque', 'textdomain' ),
            'insert_into_item' => __( 'Inserir em texto da home', 'textdomain' ),
            'uploaded_to_this_item' => __( 'Carregar neste texto da home', 'textdomain' ),
            'items_list' => __( 'Lista de textos da home', 'textdomain' ),
            'items_list_navigation' => __( 'Navegar na lista de textos da home', 'textdomain' ),
            'filter_items_list' => __( 'Filtrar lista de textos da home', 'textdomain' ),
        );
        $args = array(
            'label' => __( 'texto da home', 'textdomain' ),
            'description' => __('Adicione os textos que serão usados na home', 'textdomain' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-editor-alignleft',
            'supports' => array('title'),
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
        register_post_type( 'textos_da_home', $args );

    }
    add_action( 'init', 'create_home_texts_cpt');
?>