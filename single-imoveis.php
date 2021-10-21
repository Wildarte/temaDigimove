<?php get_header(); ?>

<main>
    
    <section class=" container-full section_intro_pages" style="background-image: url('./img/intro-imovel-page.jpg')">
        <div class="section_intro_pages_over">
            <header class="section_intro_pages_header" style="background-color: #077DBA">
                <h1>Casa em bairro nobre</h1>
            </header>
        </div>
    </section>
    <?php if(have_posts()): while(have_posts()): the_post();?>
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
                            <?php
                                //this code get the images of the gallery
                                $images_gallery = get_post_meta(get_the_ID(), 'gallery_imovel', true );

                                foreach ( (array) $images_gallery as $key => $image ):

                                    $img = $desc = '';

                                    if ( isset( $image['imagem_imovel'] ) ) {
                                        $img = $image['imagem_imovel'];
                                    }

                                    if ( isset( $image['legenda_foto_imovel'] ) ) {
                                        $desc = $image['legenda_foto_imovel'];
                                    }

                            ?>
                            
                            <div class="slide_gallery_photos">
                                <img id="imagem_gallery" class="img-t" src="<?= $img; ?>" alt="imagem do imóvel">
                                <p class="gallery_legend">
                                    <?= $desc; ?>
                                </p>
                            </div>
                            
                            <?php endforeach; ?>

                            <a class="prev_gallery" onclick="plusSlidesGallery(-1)">&#10094;</a>
                            <a class="next_gallery" onclick="plusSlidesGallery(1)">&#10095;</a>

                            <div class="modal_full_screen"><i class="bi bi-arrows-fullscreen"></i></div>
                            <div class="btn_close_modal_photos"><i class="bi bi-x-lg"></i></div>
                        </div>
                        <div class="gallery_imovel_thumb">

                            <?php
                                //this code get the images of the gallery
                                $images_gallery_thumb = get_post_meta(get_the_ID(), 'gallery_imovel', true );
                                $count_img_thumb = 0;
                                foreach ( (array) $images_gallery_thumb as $key => $image_thumb ):

                                    $img_thumb = '';
                                    $count_img_thumb++;

                                    if ( isset( $image_thumb['imagem_imovel_id'] ) ) {
                                        $img_thumb = wp_get_attachment_image_url($image_thumb['imagem_imovel_id']);
                                    }

                            ?>

                            <div class="photo_thumb">
                                <img class="gallery_demo_thumb" onclick="currentSlideGallery(<?= $count_img_thumb; ?>)" src="<?= $img_thumb; ?>" alt="imagem do imóvel">                               
                            </div>

                            <?php endforeach; ?>
                            
                        </div>

                    </div>

                    <div class="container_video_imovel" style="display: none;">
                        <video width="320" height="240" controls>
                            <source src="<?= get_post_meta(get_the_ID(), 'cmb_video_imovel', true) ?>" type="video/mp4">
                        </video>
                    </div>


                    <!-- ==================== panoramic image ======================== -->
                    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/pannellum.css">
                    <script src="<?= get_template_directory_uri(); ?>/js/pannellum.js"></script>
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
                            "panorama": "<?= get_post_meta(get_the_ID(), 'cmb_imagem_panoramica', true) ?>",
                            "preview": "<?= get_post_meta(get_the_ID(), 'cmb_imagem_panoramica', true) ?>"
                        });
                    </script>
                    <!-- ======================== panoramic image ====================== -->



                </div>

                <div class="imovel_content_principal_info">
                    <header class="imovel_info_header">
                        <h3>Casa em bairro nobre</h3>
                    </header>
                    <div class="imovel_info_body">
                        <?php
                            //this code get the values from custo do imovel
                            $get_tipo_imovel = get_the_taxonomies();
                            $tipo_imovel = str_replace("Categorias:", "", $get_tipo_imovel["categories"]);

                            $valor_imovel = get_post_meta(get_the_ID(), 'venda_imovel', true);
                            $aluguel_imovel = get_post_meta(get_the_ID(), 'aluga_imovel', true);
                            $condominio_imovel = get_post_meta(get_the_ID(), 'condominio_imovel', true);
                            $iptu_imovel = get_post_meta(get_the_ID(), 'iptu_imovel', true);
                            
                        ?>
                        <p class="imovel_info_body_tipo"><span>Tipo de imóvel:</span> <?= $tipo_imovel; ?> </p>
                        <p class="imovel_info_body_venda"><span>Venda: </span> R$ <?= $valor_imovel; ?></p>
                        <p class="imovel_info_body_aluga"><span>Alugar:</span>  R$ <?= $aluguel_imovel; ?>/mês</p>
                        <p class="imovel_info_body_condominio"> <?= $condominio_imovel != "" ? "<span>Condomínio:</span> R$ ".$condominio_imovel : ""; ?></p>
                        <p class="imovel_info_body_iptu"> <?= $iptu_imovel != "" ? "<span>IPTU:</span> R$ ".$iptu_imovel : ""; ?></p>

                        <hr>

                        <div class="imovel_info_atendimento">
                            <div class="imovel_info_contato">
                                <div class="imovel_info_thumb">
                                    <img src="<?= get_template_directory_uri(); ?>/img/img-corretor.jpg" alt="">
                                </div>
                                <div class="imovel_info_name">
                                    <h4> <?php the_author(); ?> </h4>
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
                <?php 
                    $video_imovel = get_post_meta(get_the_ID(), 'cmb_video_imovel', true);
                    $panoram_image = get_post_meta(get_the_ID(), 'cmb_imagem_panoramica', true)  
                ?>
                <button onclick="controlToggles(1)" class="btn_media_imagem controlMedia btn_media_selected">imagem</button>
                <?= $video_imovel != "" ? '<button onclick="controlToggles(2)" class="btn_media_video controlMedia">vídeo</button>' : ''; ?>
                <?= $panoram_image != "" ? '<button onclick="controlToggles(3)" class="btn_media_3d controlMedia">panorâmica</button>' : ''; ?> 
            </div>

            <div class="imovel_content_detalhes">
                <?php
                    $quartos_imovel = get_post_meta(get_the_ID(), 'quartos_imovel', true);
                    $suites_imovel = get_post_meta(get_the_ID(), 'suites_imovel', true);;
                    $banheiro_imovel = get_post_meta(get_the_ID(), 'banheiros_imovel', true);;
                    $vagas_imovel = get_post_meta(get_the_ID(), 'vagas_imovel', true);;
                    $m2_util = get_post_meta(get_the_ID(), 'metros2_imovel', true);;
                    $m2_total = get_post_meta(get_the_ID(), 'metros2_total_imovel', true);;
                    $aceite_pet = get_post_meta(get_the_ID(), 'pet_imovel', true);;
                ?>
                <ul class="imovel_detalhes_info">
                    <?= $quartos_imovel != "" ? '<li>Quartos: '.$quartos_imovel.'</li>' : ""; ?>
                    <?= $suites_imovel != "" ? '<li>Suites: '.$suites_imovel.'</li>' : ""; ?>
                    <?= $banheiro_imovel != "" ? '<li>Banheiros: '.$banheiro_imovel.'</li>' : ""; ?>
                    <?= $vagas_imovel != "" ? '<li>Vagas: '.$vagas_imovel.'</li>' : ''; ?>
                    <?= $m2_util != "" ? '<li>m2 área útil: '.$m2_util.'m<sup>2</sup></li>' : ""; ?>
                    <?= $m2_total != "" ? '<li>m2 área total: '.$m2_total.'m<sup>2</sup> área total</li>' : ''; ?>
                    <?= $aceite_pet != "" ? '<li>Aceita Pet: '.$aceite_pet.'</li>' : ''; ?>
                    
                </ul>

                <div class="imovel_tab_desc">
                    <div class="imovel_tab_col_1">
                        <div class="header_desc_col_1">
                            <h3>Características:</h3>
                        </div>
                        <div class="body_desc_col_1">
                            <ul>
                                <?php
                                    $caracts = get_post_meta(get_the_ID(), 'caracteristicas_imovel', true);
                                    foreach($caracts as $carac):
                                        echo "<li>". $carac['char_single_imovel'] ."</li>";
                                    endforeach;
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="imovel_tab_col_2">
                        <div class="header_desc_col_2">
                            <h3>Descrição:</h3>
                        </div>
                        <div class="body_desc_col_2">

                            <p><?= get_post_meta(get_the_ID(), 'description_imovel', true); ?></p>
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
    <?php endwhile; endif; ?>
</main>
<?php include(TEMPLATEPATH . '/inc/maps.php') ?>
<?php get_footer(); ?>