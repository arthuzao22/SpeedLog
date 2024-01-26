<?php session_start(); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"> -->
<link rel="stylesheet" href="<?php echo base_url('css/header.css')?>">  
<script src="<?php echo base_url('js/jquery.js')?>"></script>
<header class="u-clearfix u-header u-sticky u-overlap" style="background-color: white" id="sec-8de1">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="<?php echo base_url() ?>" class="u-image u-logo u-image-1" data-image-width="800" data-image-height="600">
            <img src="<?php echo base_url('images/logo-speedlogo.jpg') ?>" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-grey-60 u-text-hover-custom-color-3" href="<?php echo base_url() ?>" style="padding: 10px 22px;">HOME</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-grey-60 u-text-hover-custom-color-3" href="<?php echo base_url('#sec-9a81') ?>" style="padding: 10px 22px;">SOBRE</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-grey-60 u-text-hover-custom-color-3" href="<?php echo base_url('#sec-1f9d') ?>" style="padding: 10px 22px;">CONTATOS</a>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url() ?>">HOME</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('#sec-9a81') ?>">SOBRE</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo base_url('#sec-1f9d') ?>">CONTATOS</a>
                            </li>
                            <?php
                            if ($_SESSION['user'][2] == 'Cliente') {
                                echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="' . base_url('App/clientes') . '">ÁREA DO CLIENTE</a>
                                </li>';
                            }
                            if ($_SESSION['user'][2] == 'Motoboy') {
                                echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="' . base_url('App/motoboys') . '">ÁREA DO MOTOBOY</a>
                                </li>';
                            }
                            if ($_SESSION['user'][2] == 'Administrador') {
                                echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="' . base_url('App/admin') . '">ADMINISTRAÇÃO</a>
                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
        <?php if (isset($_SESSION['user'])) { ?>
            <!-- Example split danger button -->
            <div class="btn-group u-btn-1">
                <button type="button" id="deslogar" class="btn btn-danger">LOGOUT</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <?php if($_SESSION['user'][2] == 'Cliente')  {?>
                        <li><a class="dropdown-item" href="<?php echo base_url('App/clientes') ?>"><b>Área do Cliente</b></a></li>
                    <?php } ?>
                    <?php if($_SESSION['user'][2] == 'Motoboy')  {?>
                        <li><a class="dropdown-item" href="<?php echo base_url('App/motoboys') ?>"><b>Área do Motoboy</b></a></li>
                    <?php } ?>
                    <?php if($_SESSION['user'][2] == 'Administrador')  {?>
                        <li><a class="dropdown-item" href="<?php echo base_url('App/admin') ?>"><b>Administração</b></a></li>
                    <?php } ?>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                </ul>
            </div>
        <?php } else { ?>
            <a href="<?php echo base_url("App/login/") ?>" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-custom-color-4 u-radius-50 u-btn-1">LOGIN</a>
        <?php } ?>
    </div>
</header>



<script>
    $('#deslogar').click(function() {
        location.assign('http://localhost/Speedlog/App/logout');
    });
</script>