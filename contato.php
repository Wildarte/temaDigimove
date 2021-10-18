<?php
// Template Name: contato
get_header();
?>

<main>
    <section class=" container-full section_intro_pages" style="background-image: url('./img/intro-contato-page.jpg')">
        <div class="section_intro_pages_over">
            <header class="section_intro_pages_header">
                <h1>Contato</h1>
            </header>
        </div>
    </section>

    <section class="container section_page_contato">
        <article class="card_page_contato">
            <div class="icon_card_contato">
                <i class="bi bi-telephone"></i>
            </div>
            <div class="body_card_contato">
                <p class="card_contato_title">Entren em contato</p>
                <p>+55 99 9 9999-9999</p>
                <p>contato@meusite.com</p>
            </div>
        </article>
        
        <article class="card_page_contato">
            <div class="icon_card_contato">
                <i class="bi bi-clock"></i>
            </div>
            <div class="body_card_contato">
                <p class="card_contato_title">Horário de atendimento</p>
                <p>Segunda à sexta</p>
                <p>9h00 às 18h00</p>
            </div>
        </article>

        <article class="card_page_contato">
            <div class="icon_card_contato">
                <i class="bi bi-geo-alt"></i>
            </div>
            <div class="body_card_contato">
                <p class="card_contato_title">Nossa localização</p>
                <p>Av. Paulista, xxx,  Bairro Nossa União, São Paulo</p>
            </div>
        </article>
    </section>

    <section class="container-full section_maps_contato">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4886195944687!2d-46.684340585629656!3d-23.586803084670215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5744e0ebff5b%3A0x769bf4a32f914782!2sGoogle%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1633474260595!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <?php include('./inc/formContact.php'); ?>
</main>
<?php get_footer(); ?>