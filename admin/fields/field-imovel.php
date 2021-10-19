<?php

    function cmb2_field_imovel(){

        $cmb_gallery = new_cmb2_box([
            'id' => 'box_gallery',
            'title' => 'Galeria de Fotos',
            'object_types' => 'imoveis'
        ]);

        $cmb_gallery->add_field([
            'name' => 'Galeria de imagens',
            'desc' => 'Adicione aqui as imagens da propriedade',
            'id'   => 'gallery_imovel',
            'type' => 'file_list',
            'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
            'query_args' => array( 'type' => 'image' ), // Only images attachment
            // Optional, override default text strings
            'text' => array(
                'add_upload_files_text' => 'Adicione ou atualize imagens', // default: "Add or Upload Files"
                'remove_image_text' => 'Replacement', // default: "Remove Image"
                'file_text' => 'Replacement', // default: "File:"
                'file_download_text' => 'Replacement', // default: "Download"
                'remove_text' => 'Replacement', // default: "Remove"
            ),
        ]);


        /*
        $gallery_photo = $cmb_slide_home->add_field([
            'name' => '<h1>Slides da Página Home</h1>',
            'id' => 'slider_home',
            'type' => 'group',
            'repeatable' => true,
            'description' => __('Slides da página home, adicione aqui abaixo', 'cmb2'),
            'options' => [
                'group_title' => __('Slide {#}', 'cmb2'),
                'add_button' => __('Adicionar Slide', 'cmb2'),
                'remove_button' => __('Remover Slide', 'cmb2'),
                'sortable' => true,
                'closed' => true
            ]
        ]);
        */
    }
    add_action('cmb2_admin_init', 'cmb2_field_imovel');

?>