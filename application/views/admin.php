<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"> -->
<link rel="stylesheet" href="<?php echo base_url('css/header.css') ?>">
<script src="<?php echo base_url('js/jquery.js') ?>"></script>
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
                    <?php if ($_SESSION['user'][2] == 'Cliente') { ?>
                        <li><a class="dropdown-item" href="<?php echo base_url('App/clientes') ?>"><b>Área do Cliente</b></a></li>
                    <?php } ?>
                    <?php if ($_SESSION['user'][2] == 'Motoboy') { ?>
                        <li><a class="dropdown-item" href="<?php echo base_url('App/motoboys') ?>"><b>Área do Motoboy</b></a></li>
                    <?php } ?>
                    <?php if ($_SESSION['user'][2] == 'Administrador') { ?>
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


<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Speed Log - Administrador</title>
    <link rel="stylesheet" href="<?php echo base_url('css/nicepage.css') ?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('css/administrador.css') ?>" media="screen">
    <script class="u-script" type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?php echo base_url('js/admin.js') ?>" defer=""></script>
    <script class="u-script" type="text/javascript" src="<?php echo base_url('js/nicepage.js') ?>" defer=""></script>
    <meta name="generator" content="Nicepage 5.5.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "SpeedLog",
            "logo": "images/logo-speedlogo.jpg",
            "sameAs": []
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="ADMINISTRADOR">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
    <header class="u-clearfix u-header u-header" id="sec-8de1">
        <section class="u-align-center u-clearfix u-section-1" id="sec-753f">
            <div class="u-clearfix u-sheet u-sheet-1">
                <h2 class="u-align-center u-subtitle u-text u-text-grey-60 u-text-1">ADMINISTRAÇÃO</h2> <br><br>
                <div class="u-expanded-width u-table u-table-responsive u-table-1">
                    <table class="table table-striped table-hover caption-top">
                        <caption>Lista de Serviços</caption>
                        <thead class="table-dark">
                            <tr style="font-weight:bold;">
                                <th scope="col">#</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Motoboy</th>
                                <th scope="col">Inicio</th>
                                <th scope="col">Previsto</th>
                                <th scope="col">Frete</th>
                                <th scope="col">CEP Origem</th>
                                <th scope="col">CEP Destino</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($entrega as $pr) { ?>
                                <tr>
                                    <th scope="row" style="font-weight: bold;"><?php echo $pr->idEntrega ?></th>
                                    <td><?php echo $pr->idCliente ?>
                                    <td><?php echo $pr->idMotoboy ?></td>
                                    <td><?php if ($pr->horarioInicio == '') {
                                            echo '';
                                        } else {
                                            echo date('d/m/y - h\h i\m', strtotime($pr->horarioInicio));
                                        } ?></td>
                                    <td><?php if ($pr->horarioPrevisto == '') {
                                            echo '';
                                        } else {
                                            echo date('d/m/y - h\h i\m', strtotime($pr->horarioPrevisto));
                                        } ?></td>
                                    <td><?php echo "R$ " . $pr->valorFrete ?></td>
                                    <td><?php echo $pr->cep_origem ?></td>
                                    <td><?php echo $pr->cep_destino ?></td>
                                    <td id="sts" style="font-weight: bold;"><?php echo $pr->status ?></td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <footer class="u-clearfix u-footer u-grey-80" id="sec-1f9d" style="margin-top: 70px;">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/speed.log.96"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2e50"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2e50">
                                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
        c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                            </svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/SpeedLog2"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c1b6"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c1b6">
                                <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                                <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
        c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
        c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
        c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
        c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
                            </svg></span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/speed_log/"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5327"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5327">
                                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
        z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
                                <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
                                <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
        C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
        c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                            </svg></span>
                    </a>
                    <a class="u-social-url" title="linkedin" target="_blank" href="https://br.linkedin.com/in/speed-log-b661b9206"><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a431"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a431">
                                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
        C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
        H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
                            </svg></span>
                    </a>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button style="display: none" id="modal" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>


        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>