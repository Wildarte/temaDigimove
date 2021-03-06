<?php

    function cmb2_field_imovel(){

        $cmb_gallery = new_cmb2_box([
            'id' => 'box_gallery',
            'title' => 'Galeria de Mídia',
            'object_types' => 'imoveis'
        ]);

        $group_gallery = $cmb_gallery->add_field( array(
            'id' => 'gallery_imovel',
            'name' => 'Galeria de imagens',
            'type' => 'group',
            'description' => __( 'Galeria de imagens com descrição', 'cmb2' ),
            // 'repeatable'  => false, // use false if you want non-repeatable group
            'options'     => array(
                'group_title'       => __( 'Imagem {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
                'add_button'        => __( 'Adicionar imagem', 'cmb2' ),
                'remove_button'     => __( 'Remover imagem', 'cmb2' ),
                'sortable'          => true,
                'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        ) );
        $cmb_gallery->add_group_field($group_gallery, [
            'name' => 'Imagem do imóvel',
            'id' => 'imagem_imovel',  
            'type' => 'file',
            'desc' => 'Coloque aqui a imagem que corresponde ao imóvel)',
            'options' => [
                'url' => false
            ],
            'text' => [
                'add_upload_file_text' => 'adcionar/Atualizar imagem'
            ],
            'query_args' => [
                'type' => [
                    'image/gif',
                    'image/jpeg',
                    'image/jpg',
                    'image/png'
                ]
            ],
            'preview_size' => 'medium'
        ]);
        $cmb_gallery->add_group_field($group_gallery, [
            'name' => 'Legenda da foto',
            'id' => 'legenda_foto_imovel',
            'desc' => 'Uma breve e curta desrcriçao da foto com no máximo 24 caracteres',
            'type' => 'text',
            'attributes' => [
                'maxlength' => 24
            ]
        ]);

        $cmb_gallery->add_field([
            'name'    => 'Vídeo',
            'desc'    => 'Coloque aqui um vídeo do imóvel',
            'id'      => 'cmb_video_imovel',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => 'Adicionar ou atualizar vídeo' // Change upload button text. Default: "Add or Upload File"
            ),
            // query_args are passed to wp.media's library query.
            'query_args' => array(
                'type' => 'video/mp4', // Make library only display PDFs.
                // Or only allow gif, jpg, or png images
                // 'type' => array(
                //     'image/gif',
                //     'image/jpeg',
                //     'image/png',
                // ),
            ),
            'preview_size' => 'large', // Image size to use when previewing in the admin.
        ]);

        $cmb_gallery->add_field([
            'name'    => 'Imagem panorâmica',
            'desc'    => 'Coloque aqui uma imagem panorâmica do imóvel',
            'id'      => 'cmb_imagem_panoramica',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => 'Adicionar ou atualizar imagem panorâmica' // Change upload button text. Default: "Add or Upload File"
            ),
            // query_args are passed to wp.media's library query.
            'query_args' => array(
                'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png',
                ),
            ),
            'preview_size' => 'large', // Image size to use when previewing in the admin.
        ]);
        
        $cmb_tipo_imovel = new_cmb2_box([
            'id' => 'tipo_de_imovel',
            'title' => 'Tipo de imóvel',
            'object_types' => 'imoveis'
        ]);
       
        $cmb_tipo_imovel->add_field( array(
            'id' => 'tipo_imovel_select',
            'name' => 'Selecione o tipo do imóvel',
            'desc' => 'Tipo de imóvel corresponde a Categoria do imóvel, você pode administrar isso no item "Categorias" na aba "Imóveis" na barra de menu lateral',
            'taxonomy' => 'categories', //Enter Taxonomy Slug
            'type' => 'taxonomy_select',
            'remove_default' => 'true', // Removes the default metabox provided by WP core.
            // Optionally override the args sent to the WordPress get_terms function.
            'query_args' => array(
                // 'orderby' => 'slug',
                // 'hide_empty' => true,
            ),
        ) );
        
        
        $cmb_custo_imovel = new_cmb2_box([
            'id' => 'custo_imovel',
            'title' => 'Custos do imóvel',
            'object_types' => 'imoveis'
        ]);
        $cmb_custo_imovel->add_field([
            'id' => 'venda_imovel',
            'name' => 'Valor de venda do imóvel',
            'desc' => 'Preencha com o valor de venda total do imóvel (coloque apenas o valor, sem R$) <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_custo_imovel->add_field([
            'id' => 'aluga_imovel',
            'name' => 'Valor de aluguel do imóvel',
            'desc' => 'Preencha com o valor de aluguel do imóvel (coloque apenas o valor, sem R$) <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_custo_imovel->add_field([
            'id' => 'condominio_imovel',
            'name' => 'Valor do condomínio',
            'desc' => 'Preencha com o valor de condomínio do imóvel (coloque apenas o valor, sem R$) <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_custo_imovel->add_field([
            'id' => 'iptu_imovel',
            'name' => 'Valor do IPTU do imóvel',
            'desc' => 'Preencha com o valor do IPTU do imóvel (coloque apenas o valor, sem R$) <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);


        //dealhes do imóvel ======================================================
        $cmb_detail_imovel = new_cmb2_box([
            'id' => 'detail_imovel',
            'title' => 'Detalhes do imóvel',
            'object_types' => 'imoveis'
        ]);
        $cmb_detail_imovel->add_field([
            'id' => 'quartos_imovel',
            'name' => 'Número de quartos',
            'desc' => 'Preencha com o número de quartos do imóvel <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_detail_imovel->add_field([
            'id' => 'suites_imovel',
            'name' => 'Número de Suites',
            'desc' => 'Preencha com o número de suites do imóvel <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_detail_imovel->add_field([
            'id' => 'banheiros_imovel',
            'name' => 'Número de banheiros',
            'desc' => 'Preencha com o número de banheiros do imóvel <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_detail_imovel->add_field([
            'id' => 'vagas_imovel',
            'name' => 'Número de Vagas',
            'desc' => 'Preencha com o número de vagas do imóvel <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_detail_imovel->add_field([
            'id' => 'metros2_imovel',
            'name' => 'metros<sup>2</sup> área útil',
            'desc' => 'Preencha com o número de metros<sup>2</sup> de área útil do imóvel <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_detail_imovel->add_field([
            'id' => 'metros2_total_imovel',
            'name' => 'metros<sup>2</sup> área total',
            'desc' => 'Preencha com o número de metros<sup>2</sup> de área total do imóvel <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'text',
            'attributes' => [
                'type' => 'number'
            ]
        ]);
        $cmb_detail_imovel->add_field([
            'id' => 'pet_imovel',
            'name' => 'Aceita Pet',
            'desc' => 'Aceita Pet no local <br> <strong>Caso esse campo esteja vazio, não será exibido</strong>',
            'type' => 'radio',
            'options' => array(
                'sim' => __( 'Sim', 'cmb2' ),
                'nao' => __( 'Não', 'cmb2' )
            ),
        ]);
        //dealhes do imóvel ======================================================





        //características do imovel ==============================================
        $cmb_char_imovel = new_cmb2_box([
            'id' => 'char_imovel',
            'title' => 'Características do imóvel',
            'object_types' => 'imoveis'
        ]);
        $cmb_caracteristicas_imovel = $cmb_char_imovel->add_field([
            'id' => 'caracteristicas_imovel',
            'name' => '<h1>Características do imóvel</h1>',
            'type' => 'group',
            'description' => __( 'Adicione mais detalhes do imóvel, quanto mais informação, melhor para o seu cliente', 'cmb2' ),
            // 'repeatable'  => false, // use false if you want non-repeatable group
            'options'     => array(
                'group_title'       => __( 'Características {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
                'add_button'        => __( 'Adicionar característica', 'cmb2' ),
                'remove_button'     => __( 'Remover característica', 'cmb2' ),
                'sortable'          => true,
                'closed'         => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
            ),
        ]);
        $cmb_char_imovel->add_group_field($cmb_caracteristicas_imovel, [
            'id' => 'char_single_imovel',
            'name' => 'Característica',
            'desc' => 'Adicione uma característica específica do imóvel',
            'type' => 'text'
        ]);
        //características do imovel ==============================================




        
        $cmb_desc_imovel = new_cmb2_box([
            'id' => 'desc_imovel',
            'title' => 'Descrição do imóvel',
            'object_types' => 'imoveis'
        ]);
        $cmb_desc_imovel->add_field([
            'id' => 'description_imovel',
            'name' => 'Descrição do imóvel',
            'desc' => 'Dê detalhes sobre o imóvel acrescente informações invista na descrição sobre o imóvel (max 800 caracteres)',
            'type' => 'textarea',
            'attributes' => [
                'maxlength' => 800
            ]
        ]);
        



    }
    add_action('cmb2_admin_init', 'cmb2_field_imovel');

?>