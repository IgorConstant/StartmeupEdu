<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Igor Henrique Constant - Duetto.ag">
    <meta name="description" content="Um programa que revela seus talentos e te mostra possibilidades.">
    <meta name="keywords" content="Educação, Curso, 12 Competências, Tecnologia 4.0, Criatividade, Finanças Pessoais, Finanças Corporativas, Marketing Digital, Empreendedorismo, Pensamento Crítico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- OGTags -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Startmeup Edu">
    <meta property="og:description" content="Um programa que revela seus talentos e te mostra possibilidades.">
    <meta property="og:image" content="<?php echo base_url('assets/images/ogbanner.png') ?> ">
    <meta property="og:image:type" content="image/png">
    <meta property="og:type" content="website">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/images/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/images/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo base_url('assets/images/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?php echo base_url('assets/images/safari-pinned-tab.svg') ?>" color="#5bbad5">


    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js" crossorigin="anonymous"></script>

    <title>StartMeUp</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
</head>

<body>

    <!-- HEADER -->
    <header>
        <div uk-sticky="sel-target: .uk-container; cls-active: uk-navbar-sticky">
            <nav class="uk-container uk-padding-small" uk-navbar="mode: click">
                <div class="uk-navbar-left">
                    <div class="icon">
                        <a href="<?= base_url() ?>"><img src="assets/images/logo-overflow.png" alt="Ícone"></a>
                    </div>
                    <div class="logo">
                        <a href="<?= base_url() ?>"><img src="assets/images/logo-startmeup.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="uk-navbar-right uk-visible@l">
                    <ul class="nav uk-navbar-nav">
                        <li><a href="<?= base_url() ?>" data-id="sobre">Sobre Nós</a></li>
                        <li><a href="<?= base_url('empresas') ?>" data-id="Empresas">Para Empresas</a></li>
                        <li><a href="<?= base_url() ?>" data-id="competencias">O Programa</a></li>
                        <li><a href="<?= base_url('materiais-gratuitos') ?>" data-id="Materiais">Materiais</a></li>
                        <li><a href="<?= base_url('blog') ?>" data-id="Blog">Blog</a></li>
                        <li><a href="https://startmeup-edu.moodlecloud.com/login/index.php" target="_blank">Área do Aluno</a></li>
                        <li><a class="btn-matricula" href="#" uk-toggle="target: #pre-contato">Saiba Mais</a></li>
                    </ul>
                </div>
                <!-- Canvas -->
                <a class="uk-navbar-toggle uk-hidden@l uk-position-right" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary"><span class="off-canvas"></span></a>
            </nav>
        </div>
    </header>


    <!-- OffCANVAS -->
    <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true; flip: true; mode: push">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">
            <div class="brand uk-text-center">
                <a class="uk-offcanvas-brand" href="#"><img src="assets/images/logo-startmeup.png" alt="Logo - Startmeup"></a>
            </div>
            <ul class="nav uk-nav uk-nav-primary uk-padding-small uk-nav-left uk-margin-auto-vertical">
                <li class="offcanvas-link"><a href="<?= base_url() ?>" data-id="sobre">Sobre Nós</a></li>
                <li class="offcanvas-link"><a href="<?= base_url('empresas') ?>" data-id="Empresas">Para Empresas</a></li>
                <li class="offcanvas-link"><a href="<?= base_url() ?>" data-id="competencias">O Programa</a></li>
                <li><a href="<?= base_url('materiais-gratuitos') ?>" data-id="Materiais">Materiais</a></li>
                <li class="offcanvas-link"><a href="<?= base_url('blog') ?>" data-id="Blog">Blog</a></li>
                <li class="offcanvas-link"><a href="https://startmeup-edu.moodlecloud.com/login/index.php" target="_blank">Área do Aluno</a></li>
            </ul>
        </div>
    </div>