<?php
// Template Name: servicos
get_header();
?>

<main>
    <section class=" container-full section_intro_pages" style="background-image: url('./img/intro-servicos.jpg')">
        <div class="section_intro_pages_over">
            <header class="section_intro_pages_header">
                <h1>Serviços</h1>
            </header>
        </div>
    </section>

    <section class="container section_servicos_page">
        <header class="header_servicos">
            <h2>Conheça nossos serviços</h2>
        </header>

        <section class="section_home_servicos_body">

            <article class="card_servicos" style="background-color: #fff;">
                <header class="card_servicos_header">
                    <img src="img/servico1.jpg" alt="serviço de anúncio de imóvel">
                    <h3>ANUNCIE SEU IMÓVEL</h3>
                </header>
                <div class="card_servicos_body">
                    <p>Anúnciamos seu imóvel cuidamos de toda a parte de atendimento com os clientes e encontraremos a pessoa certa para seu imóvel</p>
                    <a class="card_saiba_mais_servico" href="#">Saiba Mais</a>
                </div>
            </article>

            <article class="card_servicos" style="background-color: #fff;">
                <header class="card_servicos_header">
                    <img src="img/servico2.jpg" alt="regularize seu imóvel">
                    <h3>REGULARIZE SEU IMÓVEL</h3>
                </header>
                <div class="card_servicos_body">
                    <p>Cuidaremos de toda a parte burocrática da regualiração do seu imóvel, nosso especialista está pronto para atender você</p>
                    <a class="card_saiba_mais_servico" href="#">Saiba Mais</a>
                </div>
            </article>

            <article class="card_servicos" style="background-color: #fff;">
                <header class="card_servicos_header">
                    <img src="img/servico3.jpg" alt="avaliação judicial">
                    <h3>AVALIAÇÃO JUDICIAL</h3>
                </header>
                <div class="card_servicos_body">
                    <p>Iremos avaliar o valor do seu imóvel, nosso especialista está preparado para atender a sua demanda</p>
                    <a class="card_saiba_mais_servico" href="#">Saiba Mais</a>
                </div>
            </article>
        </section>
    </section>
</main>
<?php include('./inc/maps.php'); ?>
<?php get_footer(); ?>