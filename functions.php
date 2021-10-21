<?php

    // Funções para Limpar o Header
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0 );
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');

    //habilitar menu
    add_theme_support("menus");

    //registrar menu
    function register_my_menu(){
        register_nav_menu('menu-principal', __('Menu Principal'));
    }
    add_action("init", 'register_my_menu');


    //custom post types
    function custom_post_type_imoveis() {
        register_post_type('imoveis', array(
            'label' => 'imoveis',
            'description' => 'imoveis',
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-admin-home',
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'imoveis', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor', 'page-attributes','post-formats'),
            'taxonomies' => array( 'tipo_imovel'),
    
            'labels' => array (
                'name' => 'imoveis',
                'singular_name' => 'Imóvel',
                'menu_name' => 'Imóveis',
                'add_new' => 'Adicionar Novo',
                'add_new_item' => 'Adicionar Novo Imóvel',
                'edit' => 'Editar',
                'edit_item' => 'Editar Imóvel',
                'new_item' => 'Novo Imóvel',
                'view' => 'Ver Imóvel',
                'view_item' => 'Ver Imóvel',
                'search_items' => 'Procurar imoveis',
                'not_found' => 'Nenhum Imóvel Encontrado',
                'not_found_in_trash' => 'Nenhum Imóvel Encontrado no Lixo',
            )
        ));
    }
    add_action('init', 'custom_post_type_imoveis');



    /* Método para o registro da Custom Taxonomy Tipo de imóvel para poder colocar categoria em cada im´ovel
    */
    function create_custom_tax_imovel(){
        register_taxonomy( 'categories', array('imoveis'), array(
            'hierarchical' => true, 
            'label' => 'Categorias', 
            'singular_label' => 'Categoria', 
            'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
            )
        );
    
        register_taxonomy_for_object_type( 'categories', 'imoveis' );
    }
    add_action( 'init', 'create_custom_tax_imovel' );
 


    //requires
    require 'admin/fields/field-imovel.php';


?>