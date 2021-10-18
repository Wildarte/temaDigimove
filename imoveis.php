<?php
// Template Name: imoveis
get_header();
?>

<main>
    <section class="container-full section_intro_imoveis">
        <div class="container section_intro_imoveis_content">
            <div class="intro_imoveis_title">
                <h1>Encontre seu imóvel ideal</h1>
            </div>
            <div class="container div_form">
                <form action="" method="POST">
                    
                    <select name="tipo">
                        <option value="tipo">tipo</option>
                        <option value="apartamento">apartamento</option>
                        <option value="casa">casa</option>
                        <option value="chacara">chacara</option>
                        <option value="terreno">terreno</option>
                    </select>
                    
                    <select name="desejo" id="">
                        <option value="desejo">desejo</option>
                        <option value="alugar">alugar</option>
                        <option value="comprar">comprar</option>
                    </select>
                    
                    <select name="city" id="">
                        <option value="cidade">cidade</option>
                        <option value="sao-paulo">São Paulo</option>
                        <option value="ferraz-de-vasconcelos">Ferraz de Vasconcelos</option>
                        <option value="poa">Poá</option>
                        <option value="suzano">Suzano</option>
                    </select>
                    
                    <select name="bairro" id="">
                        <option value="bairro">bairro</option>
                        <option value="vila-jamil">Vila Jamil</option>
                        <option value="centro">Centro</option>
                        <option value="nove-de-julho">Nove de Julho</option>
                    </select>
                    
                    <select name="valor" id="">
                        <option value="valor">valor</option>
                        <option value="500">Até R$ 500</option>
                        <option value="500-1000">R$ 500 à R$ 1000</option>
                        <option value="1000-1500">R$ 1000 à R$ 1500</option>
                        <option value="1500-2000">R$ 1500 à R$ 2000</option>
                        <option value="2000-2500">R$ 2000 à R$ 2500</option>
                    </select>
                    <br>
                    <input type="text" name="" id="" placeholder="Palavra-chave ou código">
                    <button type="submit">Buscar</button>
                </form>
            </div>
        </div>
        
    </section>

    <section class="container-full section_imoveis">
        <section class="container section_imoveis_content">

        <!-- ============================ card imovel 1 ============================ -->
            <article class="card_imovel">
            <style>
                .card-mySlides-1 {
                    display: none;
                    background-position: center;
                    background-size: cover;
                    height: 220px;
                }
                .card-mySlides-1:nth-child(1){
                    display: block;
                }
            </style>
                <header class="header_card_imovel">
                    <div class="card-slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="card-mySlides-1 fade" style="background-image: url('img/img1.jpg');">
                            <div class="card-numbertext">1 / 3</div>
                            <div class="card-text">Sala de estar</div>
                        </div>

                        <div class="card-mySlides-1 fade" style="background-image: url('img/img2.jpg');">
                            <div class="card-numbertext">2 / 3</div>
                            <div class="card-text">Cozinha</div>
                        </div>

                        <div class="card-mySlides-1 fade" style="background-image: url('img/img3.jpg');">
                            <div class="card-numbertext">3 / 3</div>
                            <div class="card-text">Cozinha 2</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-1')">&#10094;</a>
                        <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-1')">&#10095;</a>
                    </div>
                    <div class="logo_card_imovel">
                        <img src="img/logo - Digi Move.png" alt="">
                    </div>
                    <a class="link_to_imovel" href="#"></a>
                    <div class="header_card_tag">
                        <span>Venda/aluga</span>
                    </div>
                    
                </header>
                
                <div class="body_card_imovel">
                    <h3 class="title_card_imovel">Casa em rua pública</h3>
                    <ul class="att_card_imovel">
                        <li>2 Quartos</li>
                        <li>4 vagas</li>
                        <li>70 m<sup>2</sup></li>
                    </ul>

                    <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                    <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                </div>
                <div class="card_imovel_footer">
                    <a href="#">Saiba Mais</a>
                </div>
            </article>
            <!-- ============================ end card imovel 1 ============================ -->

            <!-- ============================ card imovel 2 ============================ -->
            <article class="card_imovel">
            <style>
                .card-mySlides-2 {
                    display: none;
                    background-position: center;
                    background-size: cover;
                    height: 220px;
                }
                .card-mySlides-2:nth-child(1){
                    display: block;
                }
            </style>
                <header class="header_card_imovel">
                    <div class="card-slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="card-mySlides-2 fade" style="background-image: url('img/img2.jpg');">
                            <div class="card-numbertext">1 / 3</div>
                            <div class="card-text">Sala de estar</div>
                        </div>

                        <div class="card-mySlides-2 fade" style="background-image: url('img/img3.jpg');">
                            <div class="card-numbertext">2 / 3</div>
                            <div class="card-text">Cozinha</div>
                        </div>

                        <div class="card-mySlides-2 fade" style="background-image: url('img/img1.jpg');">
                            <div class="card-numbertext">3 / 3</div>
                            <div class="card-text">Cozinha 2</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-2')">&#10094;</a>
                        <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-2')">&#10095;</a>
                    </div>
                    <div class="logo_card_imovel">
                        <img src="img/logo - Digi Move.png" alt="">
                    </div>
                    <a class="link_to_imovel" href="#"></a>
                    <div class="header_card_tag">
                        <span>Venda/aluga</span>
                    </div>
                    
                </header>
                
                <div class="body_card_imovel">
                    <h3 class="title_card_imovel">Casa em rua pública</h3>
                    <ul class="att_card_imovel">
                        <li>2 Quartos</li>
                        <li>4 vagas</li>
                        <li>70 m<sup>2</sup></li>
                    </ul>

                    <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                    <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                </div>
                <div class="card_imovel_footer">
                    <a href="#">Saiba Mais</a>
                </div>
            </article>
            <!-- ============================ end card imovel 2 ============================ -->

            <!-- ============================ card imovel 3 ============================ -->
            <article class="card_imovel">
            <style>
                .card-mySlides-3 {
                    display: none;
                    background-position: center;
                    background-size: cover;
                    height: 220px;
                }
                .card-mySlides-3:nth-child(1){
                    display: block;
                }
            </style>
                <header class="header_card_imovel">
                    <div class="card-slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="card-mySlides-3 fade" style="background-image: url('img/img1.jpg');">
                            <div class="card-numbertext">1 / 3</div>
                            <div class="card-text">Sala de estar</div>
                        </div>

                        <div class="card-mySlides-3 fade" style="background-image: url('img/img2.jpg');">
                            <div class="card-numbertext">2 / 3</div>
                            <div class="card-text">Cozinha</div>
                        </div>

                        <div class="card-mySlides-3 fade" style="background-image: url('img/img3.jpg');">
                            <div class="card-numbertext">3 / 3</div>
                            <div class="card-text">Cozinha 2</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-3')">&#10094;</a>
                        <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-3')">&#10095;</a>
                    </div>
                    <div class="logo_card_imovel">
                        <img src="img/logo - Digi Move.png" alt="">
                    </div>
                    <a class="link_to_imovel" href="#"></a>
                    <div class="header_card_tag">
                        <span>Venda/aluga</span>
                    </div>
                    
                </header>
                
                <div class="body_card_imovel">
                    <h3 class="title_card_imovel">Casa em rua pública</h3>
                    <ul class="att_card_imovel">
                        <li>2 Quartos</li>
                        <li>4 vagas</li>
                        <li>70 m<sup>2</sup></li>
                    </ul>

                    <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                    <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                </div>
                <div class="card_imovel_footer">
                    <a href="#">Saiba Mais</a>
                </div>
            </article>
            <!-- ============================ end card imovel 3 ============================ -->

            <!-- ============================ card imovel 1 ============================ -->
            <article class="card_imovel">
            <style>
                .card-mySlides-1 {
                    display: none;
                    background-position: center;
                    background-size: cover;
                    height: 220px;
                }
                .card-mySlides-1:nth-child(1){
                    display: block;
                }
            </style>
                <header class="header_card_imovel">
                    <div class="card-slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="card-mySlides-1 fade" style="background-image: url('img/img1.jpg');">
                            <div class="card-numbertext">1 / 3</div>
                            <div class="card-text">Sala de estar</div>
                        </div>

                        <div class="card-mySlides-1 fade" style="background-image: url('img/img2.jpg');">
                            <div class="card-numbertext">2 / 3</div>
                            <div class="card-text">Cozinha</div>
                        </div>

                        <div class="card-mySlides-1 fade" style="background-image: url('img/img3.jpg');">
                            <div class="card-numbertext">3 / 3</div>
                            <div class="card-text">Cozinha 2</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-1')">&#10094;</a>
                        <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-1')">&#10095;</a>
                    </div>
                    <div class="logo_card_imovel">
                        <img src="img/logo - Digi Move.png" alt="">
                    </div>
                    <a class="link_to_imovel" href="#"></a>
                    <div class="header_card_tag">
                        <span>Venda/aluga</span>
                    </div>
                    
                </header>
                
                <div class="body_card_imovel">
                    <h3 class="title_card_imovel">Casa em rua pública</h3>
                    <ul class="att_card_imovel">
                        <li>2 Quartos</li>
                        <li>4 vagas</li>
                        <li>70 m<sup>2</sup></li>
                    </ul>

                    <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                    <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                </div>
                <div class="card_imovel_footer">
                    <a href="#">Saiba Mais</a>
                </div>
            </article>
            <!-- ============================ end card imovel 1 ============================ -->

            <!-- ============================ card imovel 2 ============================ -->
            <article class="card_imovel">
            <style>
                .card-mySlides-2 {
                    display: none;
                    background-position: center;
                    background-size: cover;
                    height: 220px;
                }
                .card-mySlides-2:nth-child(1){
                    display: block;
                }
            </style>
                <header class="header_card_imovel">
                    <div class="card-slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="card-mySlides-2 fade" style="background-image: url('img/img2.jpg');">
                            <div class="card-numbertext">1 / 3</div>
                            <div class="card-text">Sala de estar</div>
                        </div>

                        <div class="card-mySlides-2 fade" style="background-image: url('img/img3.jpg');">
                            <div class="card-numbertext">2 / 3</div>
                            <div class="card-text">Cozinha</div>
                        </div>

                        <div class="card-mySlides-2 fade" style="background-image: url('img/img1.jpg');">
                            <div class="card-numbertext">3 / 3</div>
                            <div class="card-text">Cozinha 2</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-2')">&#10094;</a>
                        <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-2')">&#10095;</a>
                    </div>
                    <div class="logo_card_imovel">
                        <img src="img/logo - Digi Move.png" alt="">
                    </div>
                    <a class="link_to_imovel" href="#"></a>
                    <div class="header_card_tag">
                        <span>Venda/aluga</span>
                    </div>
                    
                </header>
                
                <div class="body_card_imovel">
                    <h3 class="title_card_imovel">Casa em rua pública</h3>
                    <ul class="att_card_imovel">
                        <li>2 Quartos</li>
                        <li>4 vagas</li>
                        <li>70 m<sup>2</sup></li>
                    </ul>

                    <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                    <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                </div>
                <div class="card_imovel_footer">
                    <a href="#">Saiba Mais</a>
                </div>
            </article>
            <!-- ============================ end card imovel 2 ============================ -->

            <!-- ============================ card imovel 3 ============================ -->
            <article class="card_imovel">
            <style>
                .card-mySlides-3 {
                    display: none;
                    background-position: center;
                    background-size: cover;
                    height: 220px;
                }
                .card-mySlides-3:nth-child(1){
                    display: block;
                }
            </style>
                <header class="header_card_imovel">
                    <div class="card-slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="card-mySlides-3 fade" style="background-image: url('img/img1.jpg');">
                            <div class="card-numbertext">1 / 3</div>
                            <div class="card-text">Sala de estar</div>
                        </div>

                        <div class="card-mySlides-3 fade" style="background-image: url('img/img2.jpg');">
                            <div class="card-numbertext">2 / 3</div>
                            <div class="card-text">Cozinha</div>
                        </div>

                        <div class="card-mySlides-3 fade" style="background-image: url('img/img3.jpg');">
                            <div class="card-numbertext">3 / 3</div>
                            <div class="card-text">Cozinha 2</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="card-prev" onclick="card_plusSlides(-1, 'card-mySlides-3')">&#10094;</a>
                        <a class="card-next" onclick="card_plusSlides(1, 'card-mySlides-3')">&#10095;</a>
                    </div>
                    <div class="logo_card_imovel">
                        <img src="img/logo - Digi Move.png" alt="">
                    </div>
                    <a class="link_to_imovel" href="#"></a>
                    <div class="header_card_tag">
                        <span>Venda/aluga</span>
                    </div>
                    
                </header>
                
                <div class="body_card_imovel">
                    <h3 class="title_card_imovel">Casa em rua pública</h3>
                    <ul class="att_card_imovel">
                        <li>2 Quartos</li>
                        <li>4 vagas</li>
                        <li>70 m<sup>2</sup></li>
                    </ul>

                    <p class="price_card_imovel">Venda: R$ 190.000  |  Aluga: R$ 900/mês</p>

                    <p class="desc_card_imovel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex harum dolorem corrupti odit cum quia reprehenderit! Atque magnam, adipisci</p>
                </div>
                <div class="card_imovel_footer">
                    <a href="#">Saiba Mais</a>
                </div>
            </article>
            <!-- ============================ end card imovel 3 ============================ -->
            
        </section>

        <div class="container section_imoveis_controllers">
            <a class="btn_page_imoveis" href="#"><i class="bi bi-caret-left-fill"></i></a>
            <a class="btn_page_imoveis" href="#"><i class="bi bi-caret-right-fill"></i></a>
        </div>
    </section>
    
    <?php include('./inc/formContact.php') ?>

</main>
<?php include('./inc/maps.php'); ?>
<?php get_footer(); ?>