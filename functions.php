<?php 
    // Função para configurar o tema
    function theme_setup(){
        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'my_footer_menu' => 'Footer Menu'
            )
        );
    }
    add_action('after_setup_theme','theme_setup');

    function css_files() {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');

        //fonts
        wp_enqueue_style('museo', 'https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300;400;500&display=swap', array(), '1.0.0', 'all');
        wp_enqueue_style('mitr', 'https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500&display=swap', array(), '1.0.0', 'all');

        wp_enqueue_style('global', get_template_directory_uri().'/assets/styles/global.css', array(),'1.0.0', 'all');
        wp_enqueue_style('header', get_template_directory_uri().'/assets/styles/header.css', array(),'1.0.0', 'all');
        wp_enqueue_style('footer', get_template_directory_uri().'/assets/styles/footer.css', array(),'1.0.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'css_files');

    function scripts_files() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, null, false); 
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));
    }
    add_action('wp_enqueue_scripts', 'scripts_files'); 
    
    //função para fazer componentização
    function includeFile($fileName, $variables) {
        extract($variables);
        include($fileName);
    }
?>