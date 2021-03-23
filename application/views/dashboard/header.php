<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Data Table -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">StartmeUp</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="login/sair"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>HOME</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <?php echo anchor('home', '<span>Inicio</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('post', '<span>Blog</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('tutores', '<span>Mentores</span>', array('class' => 'nav-link')) ?>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Cadastros</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <?php echo anchor('usuarios', '<span>Usuários</span>', array('class' => 'nav-link')) ?>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Downloads</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <?php echo anchor('materiais', '<span>Materiais Gratuitos</span>', array('class' => 'nav-link')) ?>
                        </li>
                        <li class="nav-item">
                            <?php echo anchor('contratos', '<span>Contratos</span>', array('class' => 'nav-link')) ?>
                        </li>
                    </ul>
                </div>
            </nav>