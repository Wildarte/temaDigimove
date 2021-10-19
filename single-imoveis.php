<?php get_header(); ?>

<main>
    <section class=" container-full section_intro_pages" style="background-image: url('./img/intro-imovel-page.jpg')">
        <div class="section_intro_pages_over">
            <header class="section_intro_pages_header" style="background-color: #077DBA">
                <h1>Casa em bairro nobre</h1>
            </header>
        </div>
    </section>

    <section class="container section_imovel">
        <div class="social_share_imovel">
            <div class="header_social_share_imovel">
                <h3>Compartilhar</h3>
            </div>
            <ul>
                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                <li><a href="#"><i class="bi bi-link"></i></a></li>
            </ul>
        </div>

        <div class="section_imovel_content">


            <div class="imovel_content_principal">


                <div class="imovel_content_principal_midia">
                    
                    <div class="container_gallery_photos">

                        <div class="gallery_photos_palco">
                            
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="img/gallery/image-imovel-1.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Sala de estar
                                </p>
                                </script>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="img/gallery/image-imovel-11.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Cozinha
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="img/gallery/image-imovel-12.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Slide 3 jardim dos fundos
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="img/gallery/image-imovel-4.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Quintal da frente
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="img/gallery/image-imovel-7.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Banheiro
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="img/gallery/image-imovel-8.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Sala de estar
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="img/gallery/image-imovel-9.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Sala de estar
                                </p>
                            </div>
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="img/gallery/image-imovel-10.jpg" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    Sala de estar
                                </p>
                            </div>


                            <a class="prev_gallery" onclick="plusSlidesGallery(-1)">&#10094;</a>
                            <a class="next_gallery" onclick="plusSlidesGallery(1)">&#10095;</a>

                            <div class="modal_full_screen"><i class="bi bi-arrows-fullscreen"></i></div>
                            <div class="btn_close_modal_photos"><i class="bi bi-x-lg"></i></div>
                        </div>
                        <div class="gallery_imovel_thumb">
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(1)" src="img/gallery/image-imovel-1.jpg" alt="imagem do imóvel">                               
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb img-t2" onclick="currentSlideGallery(2)" src="img/gallery/image-imovel-2.jpg" alt="imagem do imóvel">                                
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb img-t3" onclick="currentSlideGallery(3)" src="img/gallery/image-imovel-3.jpg" alt="imagem do imóvel">                               
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb img-t4" onclick="currentSlideGallery(4)" src="img/gallery/image-imovel-4.jpg" alt="imagem do imóvel">                               
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb img-t5" onclick="currentSlideGallery(5)" src="img/gallery/image-imovel-7.jpg" alt="imagem do imóvel">                               
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb img-t6" onclick="currentSlideGallery(6)" src="img/gallery/image-imovel-8.jpg" alt="imagem do imóvel">                               
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb img-t7" onclick="currentSlideGallery(7)" src="img/gallery/image-imovel-9.jpg" alt="imagem do imóvel">                               
                            </div>
                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb img-t8" onclick="currentSlideGallery(8)" src="img/gallery/image-imovel-10.jpg" alt="imagem do imóvel">
                            </div>
                        </div>

                    </div>

                    <div class="container_video_imovel" style="display: none;">
                        <video width="320" height="240" controls>
                            <source src="./video/vertical-video.mp4" type="video/mp4">
                        </video>
                    </div>


                    <!-- ==================== panoramic image ======================== -->
                    <link rel="stylesheet" href="css/pannellum.css">
                    <script src="./js/pannellum.js"></script>
                    <style>
                        .pnlm-container{
                            height: 100%;
                        }
                    </style>
                    <div id="panorama" class="container_imovel_3d .view-3d" style="display: none;">
                        
                    </div>

                    
                    <script>
                        pannellum.viewer('panorama', {
                            "type": "equirectangular",
                            "panorama": "./texturas/pan.jpg",
                            "preview": "./texturas/pan.jpg"
                        });
                    </script>
                    <!-- ======================== panoramic image ====================== -->



                </div>

                <div class="imovel_content_principal_info">
                    <header class="imovel_info_header">
                        <h3>Casa em bairro nobre</h3>
                    </header>
                    <div class="imovel_info_body">
                        <p class="imovel_info_body_tipo"><span>Tipo de imóvel:</span> apartamento</p>
                        <p class="imovel_info_body_venda"><span>Venda: </span> R$ 230.000</p>
                        <p class="imovel_info_body_aluga"><span>Alugar:</span>  R$ 900/mês</p>
                        <p class="imovel_info_body_condominio"><span>Condomínio:</span> R$ 250/mês</p>
                        <p class="imovel_info_body_iptu"> <span>IPTU:</span> R$ 150/mês</p>

                        <hr>

                        <div class="imovel_info_atendimento">
                            <div class="imovel_info_contato">
                                <div class="imovel_info_thumb">
                                    <img src="./img/img-corretor.jpg" alt="">
                                </div>
                                <div class="imovel_info_name">
                                    <h4>Andréia Correia</h4>
                                    <p>(99) 9 9999-9999</p>
                                </div>
                            </div>
                            <div class="imovel_info_link">
                                <a href="#">Tenho interesse</a>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

            <div class="controllers_media_imovel">
                <button onclick="controlToggles(1)" class="btn_media_imagem controlMedia btn_media_selected">imagem</button>
                <button onclick="controlToggles(2)" class="btn_media_video controlMedia">vídeo</button>
                <button onclick="controlToggles(3)" class="btn_media_3d controlMedia">panorâmica</button>
            </div>

            <div class="imovel_content_detalhes">
                <ul class="imovel_detalhes_info">
                    <li>Quartos: 4</li>
                    <li>Suites: 2</li>
                    <li>Banheiros: 4</li>
                    <li>Vagas: 4</li>
                    <li>m2 área útil: 155m2</li>
                    <li>m2 área total: 350m2 área total</li>
                    <li>aceita pet</li>
                </ul>

                <div class="imovel_tab_desc">
                    <div class="imovel_tab_col_1">
                        <div class="header_desc_col_1">
                            <h3>Características:</h3>
                        </div>
                        <div class="body_desc_col_1">
                            <ul>
                                <li>ar condicionado</li>
                                <li>armário área de serviço</li>
                                <li>armário closet</li>
                                <li>armário de cozinha</li>
                                <li>área de serviço</li>
                                <li>armário banheiro</li>
                                <li>armário corredor</li>
                                <li>armário escritório</li>
                            </ul>
                        </div>
                    </div>
                    <div class="imovel_tab_col_2">
                        <div class="header_desc_col_2">
                            <h3>Descrição:</h3>
                        </div>
                        <div class="body_desc_col_2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat totam laboriosam quam ut similique iusto ipsam. Sunt exercitationem laudantium reiciendis perspiciatis iusto nulla tempore molestiae accusantium, sed, mollitia ducimus nemo.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="imovel_content_location">
                <h3>Localização</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7312.983479810345!2d-46.6793726!3d-23.5866911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce575b5923bce7%3A0xd48951f5519cce3!2sFacebook%20Brasil!5e0!3m2!1spt-BR!2sbr!4v1633977140136!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="imovel_content_indication">
                <header class="imovel_indication_header">
                    <h3>Talvez você se interesse por</h3>
                </header>
                <section class="body_imovel_indication">
                    <article class="imovel_indication_card">
                        <a class="card_indication_link" href="#" class="">
                            <h4>Cobertura no centro</h4>
                            <p>Venda/aluga</p>
                        </a>
                        <div class="card_indication_bottom">
                            <a href="#">Conhecer</a>
                        </div>
                    </article>

                    <article class="imovel_indication_card">
                        <a class="card_indication_link" href="#" class="">
                            <h4>Cobertura no centro</h4>
                            <p>Venda/aluga</p>
                        </a>
                        <div class="card_indication_bottom">
                            <a href="#">Conhecer</a>
                        </div>
                    </article>

                    <article class="imovel_indication_card">
                        <a class="card_indication_link" href="#" class="">
                            <h4>Cobertura no centro</h4>
                            <p>Venda/aluga</p>
                        </a>
                        <div class="card_indication_bottom">
                            <a href="#">Conhecer</a>
                        </div>
                    </article>

                    
                    </article>
                </section>
            </div>

        </div>
    </section>
</main>
<?php include(TEMPLATEPATH . '/inc/maps.php') ?>
<?php get_footer(); ?>