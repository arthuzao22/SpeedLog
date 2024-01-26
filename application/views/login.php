<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Speed Log - Login</title>

  <link rel="stylesheet" href="<?php echo base_url('css/nicepage.css') ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('css/LOGIN.css') ?>" type="text/css">
  <script class="u-script" src="<?php echo base_url('js/jquery.js') ?>"></script>
  <script src="<?php echo base_url('js/login.js')?>" defer=""></script>
  <script class="u-script" type="text/javascript" src="<?php echo base_url('js/nicepage.js') ?>" defer=""></script>
  <meta name="generator" content="Nicepage 5.5.0, nicepage.com">
  <meta name="referrer" content="origin">
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
  <meta property="og:title" content="LOGIN">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="pt"></body>

<section class="u-align-center u-clearfix u-section-1" id="sec-c898">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-expanded-width u-tab-links-align-center u-tabs u-tabs-1">
      <ul class="u-border-1 u-border-grey-25 u-tab-list u-unstyled" role="tablist">
        <li class="u-tab-item" role="presentation">
          <a class="active u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-tab-link u-text-active-custom-color-3 u-text-grey-60 u-text-hover-grey-60 u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Clientes<br>
          </a>
        </li>
        <li class="u-tab-item" role="presentation">
          <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-tab-link u-text-active-custom-color-3 u-text-grey-60 u-text-hover-grey-60 u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Motoboy</a>
        </li>
        <li class="u-tab-item" role="presentation">
          <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-tab-link u-text-active-custom-color-3 u-text-grey-60 u-text-hover-grey-60 u-tab-link-3" id="link-tab-3d79" href="#tab-3d79" role="tab" aria-controls="tab-3d79" aria-selected="false">Administrador</a>
        </li>
      </ul>
      <div class="u-tab-content">

        <!-- Clientes   -->
        <div class="u-container-align-center u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
          <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
            <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-align-center u-form u-form-1">
                  <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">

                    <div class="u-form-email u-form-group u-label-none u-form-group-1">
                      <label for="emailCliente" class="u-label u-label-1">Email</label>
                      <input type="email" placeholder="Insira seu e-mail " id="emailCliente" name="emailCliente" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>

                    <div class="u-form-group u-label-none u-form-group-2">
                      <label for="senhaCliente" class="u-label u-label-2">Campo de Entrada</label>
                      <input type="password" placeholder="********" id="senhaCliente" name="senhaCliente" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div>
                    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-left-xs u-form-group u-form-submit u-label-none">
                      <button class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-radius-50 u-btn-1" id="loginCliente">Entrar</button>
                      <!-- <input type="submit" value="submit" class="u-form-control-hidden"> -->
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
                    <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por
                      favor, corrija os erros e tente novamente. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="2ef366e3f0f9c2a540cb8aabb78473dd">
                  </form>
                </div>
                <a href="https://nicepage.com/html-website-builder" class="u-align-center u-border-1 u-border-active-custom-color-4 u-border-hover-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-custom-color-3 u-btn-9">Esqueceu
                  sua senha?</a>
                <p class="u-align-center u-text u-text-custom-color-3 u-text-default u-text-1" style="margin-top: 1%;">ou</p>
                <a href="<?php echo base_url('App/Register') ?>" class="u-align-center u-border-1 u-border-active-custom-color-4 u-border-hover-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-custom-color-3 u-btn-9">Cadastre-se
                  aqui</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Motoboys  -->
        <div class="u-container-align-center u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-3">
            <div class="u-container-align-center-lg u-container-align-center-xl u-container-style u-expanded-width-xs u-group u-shape-rectangle u-group-2">
              <div class="u-container-layout u-container-layout-4">
                <div class="u-align-center u-form u-form-2">
                  <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                    <div class="u-form-email u-form-group u-label-none u-form-group-4">
                      <label for="emailMotoboy" class="u-label u-label-3">Email</label>
                      <input type="email" placeholder="Insira seu e-mail" id="email_m" name="emailMotoboy" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-label-none u-form-group-5">
                      <label for="senhaMotoboy" class="u-label u-label-4">Campo de Entrada</label>
                      <input type="password" placeholder="********" id="senha_m" name="senhaMotoboy" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div>
                    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-left-xs u-form-group u-form-submit u-label-none">
                      <button class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-radius-50 u-btn-1" id="loginMotoboy">Entrar</button>
                      <!-- <input type="submit" value="submit" class="u-form-control-hidden"> -->
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
                    <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por
                      favor, corrija os erros e tente novamente. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="2ef366e3f0f9c2a540cb8aabb78473dd">
                  </form>
                </div>
                <a href="https://nicepage.com/html-website-builder" class="u-align-center u-border-1 u-border-active-custom-color-4 u-border-hover-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-custom-color-3 u-btn-9">Esqueceu
                  sua senha?</a>
                <p class="u-align-center u-text u-text-custom-color-3 u-text-default u-text-1" style="margin-top: 1%;">ou</p>
                <a href="<?php echo base_url('App/Register') ?>" class="u-align-center u-border-1 u-border-active-custom-color-4 u-border-hover-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-custom-color-3 u-btn-9">Cadastre-se
                  aqui</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Administradores -->
        <div class="u-container-align-center u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-3d79" role="tabpanel" aria-labelledby="link-tab-3d79">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-5">
            <div class="u-container-align-center-lg u-container-align-center-xl u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-3">
              <div class="u-container-layout u-container-layout-6">
                <div class="u-align-center u-form u-form-3">
                  <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                    <div class="u-form-email u-form-group u-label-none u-form-group-7">
                      <label for="emailAdmin" class="u-label u-label-5">Email</label>
                      <input type="email" placeholder="Insira seu e-mail" id="emailAdmin" name="emailAdmin" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-label-none u-form-group-8">
                      <label for="senhaAdmin" class="u-label u-label-6">Campo de Entrada</label>
                      <input type="password" placeholder="********" id="senhaAdmin" name="senhaAdmin" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div>
                    <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-left-xs u-form-group u-form-submit u-label-none">
                      <button class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-radius-50 u-btn-1" id="loginAdmin">Entrar</button>
                      <!-- <input type="submit" value="submit" class="u-form-control-hidden"> -->
                    </div>
                    <!-- <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
                    <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por
                      favor, corrija os erros e tente novamente. </div> -->
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="2ef366e3f0f9c2a540cb8aabb78473dd">
                  </form>
                </div>
                <a href="https://nicepage.com/html-website-builder" class="u-align-center u-border-1 u-border-active-custom-color-4 u-border-hover-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-custom-color-3 u-btn-9">Esqueceu
                  sua senha?</a>
                <p class="u-align-center u-text u-text-custom-color-3 u-text-default u-text-1" style="margin-top: 1%;">ou</p>
                <a href="<?php echo base_url('App/Register') ?>" class="u-align-center u-border-1 u-border-active-custom-color-4 u-border-hover-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-custom-color-3 u-btn-9">Cadastre-se
                  aqui</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="margin-top: -10px;margin-bottom: -10px;">Atenção</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="text-align:center;">Email ou senha incorreto(s), tente novamente.</p>
        <span style="font-style: italic;font-size: 14px;">* Contato para apoio administrativo: speedlog@gmail.com</span>
      </div>
    </div>
  </div>
</div>
