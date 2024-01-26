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
  <title>Speed Log - Clientes</title>
  <link rel="stylesheet" href="<?php echo base_url('css/nicepage.css') ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('css/CLIENTES.css') ?>" type="text/css">
  <script class="u-script" src="<?php echo base_url('js/jquery.js') ?>"></script>
  <script class="u-script" type="text/javascript" src="<?php echo base_url('js/nicepage.js') ?>" defer=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
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
  <meta property="og:title" content="CLIENTES">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
  <section class="u-clearfix u-image u-section-1" id="sec-a5fe" data-image-width="1110" data-image-height="508" style="background-image: url('<?php echo base_url('images/original-e38e168463df69f110bf8b2ddf5097f4-1-1110x5081.jpeg  ') ?>');">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">Bem vindo, <?php echo $_SESSION['user'][0] ?>.</h2>
      <h2 class="u-subtitle u-text u-text-default-lg u-text-default-md u-text-default-xl u-text-grey-10 u-text-2">O que está esperando para solicitar nosso serviço?</h2>
      <button class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-custom-color-4 u-radius-50 u-btn-1" id="solicitarServico">
        <span style="font-size: 0.75rem;">solicitar </span>&nbsp;<span class="u-file-icon u-icon u-text-white u-icon-1"><img src="<?php echo base_url('images/724927-fe89e18a.png') ?>" alt=""></span>
      </button>
    </div>
  </section>

  <div class="modal" tabindex="-1" id="Modal">
    <div class="modal-dialog modal-mid">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Speed Log - Express</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- <p>Modal body text goes here.</p> -->
          <div class="row">

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Peso da Mercadoria (Kg)</label>
              <input type="number" class="form-control" placeholder="Máx: 12Kg" id="pesom" name="pesom">
            </div>


            <div class="col">

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">CEP Origem</label>
                <input type="text" class="form-control" id="cepo" placeholder="Informe o CEP de origem" name="cepo">
              </div>
            </div>
            <div class="col">

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">CEP Destino</label>
                <input type="text" class="form-control" id="cepd" placeholder="Informe o CEP de Destino" name="cepd">
              </div>
            </div>
          </div>
          <button class="btn btn-primary" id="calcFrete">Calcular Frete <i class="fa-solid fa-angles-right"></i></button>
          <!-- <button class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-custom-color-4 u-radius-50 u-btn-1" id="calcFrete">
            <span style="font-size: 1rem;">Calcular Frete </span>&nbsp;<span class="u-file-icon u-icon u-text-white u-icon-1"><img src="<?php echo base_url('images/724927-fe89e18a.png') ?>" alt=""></span>
          </button> -->
          <br><br>
          <div class="row">
            <div class="col">
              <div class="mb-3" id="divEnderecoo" style="display: none;">
                <label for="exampleFormControlInput1" class="form-label">End. Origem</label>
                <input class="form-control" type="text" id="enderecoo" value="" aria-label="readonly input example" readonly>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="mb-3" id="divEnderecod" style="display: none;width: 370px">
                <label for="exampleFormControlInput1" class="form-label">End. Destino</label>
                <input class="form-control" type="text" id="enderecod" value="" aria-label="readonly input example" readonly>
              </div>
            </div>
            <div class="col">
              <div class="mb-3" id="divNumd" style="display: none;width: 70px;">
                <label for="exampleFormControlInput1" class="form-label">N°</label>
                <input class="form-control" type="number" id="numd" value="" placeholder="Ex: 91" aria-label="readonly input example">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">

              <div class="mb-3" id="divDistancia" style="display: none;">
                <label for="exampleFormControlInput1" class="form-label">Distância</label>
                <input class="form-control" type="text" id="distancia" value="" aria-label="readonly input example" readonly>
              </div>
            </div>
            <div class="col">

              <div class="mb-3" id="divTempo" style="display: none;">
                <label for="exampleFormControlInput1" class="form-label">Tempo</label>
                <input class="form-control" type="text" id="tempo" value="" aria-label="readonly input example" readonly>
              </div>
            </div>
            <div class="mb-3" id="divFrete" style="display: none;">
              <label for="exampleFormControlInput1" class="form-label">Valor do Frete: </label>
              <input class="form-control" type="text" id="frete" name="frete" value="" aria-label="readonly input example" readonly>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <button type="button" class="btn btn-primary" id="finalizar">Confirmar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="infoCep" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title fs-5" id="exampleModalLabel" style="margin-top: -10px;margin-bottom: -10px;">Atenção</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p style="text-align:center;">CEP fornecido não pertece a Juiz de Fora <br> ou <br> Carga indisponível</p><br>
          <!-- <p style="text-align: center;font-size: 15px;"><b>Valor a receber: <span id="exibirFrete"></span></b></p> -->
          <span style="font-style: italic;font-size: 14px;">* Juiz de Fora: 36000-001 a 36107-999. <br> * Carga Máxima: Até 12Kgs</span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button> -->
        </div>
      </div>
    </div>
  </div>

  <input type="hidden" name="valorT" id="valorT">
  <input type="hidden" name="valorD" id="valorD">
  <input type="hidden" name="idCliente" id="idCliente" value="<?php echo $_SESSION['user'][1] ?>">
  <input type="hidden" name="valorF" id="valorF">

  <script src="<?php echo base_url('js/clientes.js') ?>"></script>