<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/font/bootstrap-icons.css">
    <style>i{font-size: 1.5em;}</style>
    <!-- header wordpress -->
    <?php wp_head(); ?>
    <!-- header wordpress -->
</head>
<body>

    <header class="header container-full">
        <div class="header_social">
            <div class="container header_social_content">
                <div class="header_social_contato">
                    <a href="tel:999999999999"><i class="bi bi-telephone-outbound"></i> (99) 9 9999-9999</a>
                    <a href="mailto:contato@meusite.com"><i class="bi bi-envelope"></i> contato@meusite.com</a>
                </div>
                <div class="header_social_redes">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                
            </div>
        </div>
        <div class="container header_container">
            <div class="header_logo">
                <a href="<?= home_url(); ?>/" class="header_logo_link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo - Digi Move2.png" alt="logo do site">
                </a>
            </div>
            <div class="header_right">
                <nav class="nav_menu">
                    <header class="header_menu_mobile">
                        <div class="logo_menu_mobile">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo - Digi Move2.png" alt="logo mobile do site">
                        </div>
                        <div class="btn_close_menu">
                            <i class="bi bi-x-circle"></i>
                        </div>
                    </header>
                    <ul>
                        <li><a href="<?= home_url(); ?>/">Home</a></li>
                        <li><a href="<?= home_url(); ?>/imoveis.php">Imóveis</a></li>
                        <li><a href="<?= home_url(); ?>/servicos.php">Serviços</a></li>
                        <li><a href="<?= home_url(); ?>/sobre.php">Sobre</a></li>
                        <li><a href="<?= home_url(); ?>/contato.php">Contato</a></li>
                    </ul>
                    <div class="rec_menu"></div>
                    <div class="header_social_mobile">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </nav>
                <div class="btn_open_menu">
                    <i class="bi bi-list"></i>
                </div>
            </div>
            
        </div>
        
    </header>