<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Speed Log - Cadastro</title>
    <link rel="stylesheet" href="<?php echo base_url('css/nicepage.css') ?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('css/REGISTER.css') ?>" media="screen">
    <script class="u-script" src="<?php echo base_url('js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('js/register.js') ?>" defer=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
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
    <meta property="og:title" content="REGISTER">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="pt">
    <section class="u-clearfix u-container-align-center u-section-1" id="sec-9c26">
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
                </ul>
                <div class="u-tab-content">
                    <!-- //Clientes  -->
                    <div class="u-container-align-center u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                            <div class="u-container-align-center u-container-style u-group u-shape-rectangle u-group-1">
                                <div class="u-container-layout u-container-layout-2">
                                    <div class="u-align-center u-form u-form-1">
                                        <form action="" id="formulario1" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" name="form" style="padding: 10px;">
                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input placeholder="Nome Completo" type="text" name="nome" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input placeholder="Insira seu email" type="email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>
                                            <div class="u-form-group u-label-none u-form-group-4">
                                                <label for="cpf" class="u-label">Campo de Entrada</label>
                                                <input type="text" placeholder="CPF" name="cpf" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input placeholder="Telefone com DDD" type="text" name="telefone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input type="date" name="data" placeholder="YYYY/MM/DD" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" data-date-format="yyyy/mm/dd">
                                            </div>
                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input type="password" name="senha" placeholder="********" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">

                                            </div>

                                            <button type="submit" class="u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50">
                                                Cadastrar
                                            </button>
                                        </form>
                                        <input type="hidden" value="" name="recaptchaResponse">
                                        <input type="hidden" name="formServices" value="2ef366e3f0f9c2a540cb8aabb78473dd">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //Motoboys  -->
                    <div class="u-container-align-center u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
                        <div class="u-container-layout u-container-layout-3">
                            <div class="u-container-align-center u-container-style u-group u-shape-rectangle u-group-2">
                                <div class="u-container-layout u-container-layout-4">
                                    <div class="u-align-center u-form u-form-2">

                                        <form id="formulario2" enctype="multipart/form-data" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input placeholder="Nome Completo" type="text" name="nome_m" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>
                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input placeholder="Insira seu email" type="email" name="email_m" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input placeholder="Insira seu CPF" type="text" name="cpf_m" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input placeholder="Telefone com DDD" type="text" name="telefone_m" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input placeholder="Placa" type="text" name="placa_m" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input type="file" name="foto_m" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <div class="u-form-group u-label-none u-form-group-9">
                                                <input type="password" name="senha_m" placeholder="********" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                            </div>

                                            <button type="submit" class="u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50">
                                                Cadastrar
                                            </button>
                                        </form>
                                        <input type="hidden" value="" name="recaptchaResponse">
                                        <input type="hidden" name="formServices" value="2ef366e3f0f9c2a540cb8aabb78473dd">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="exampleModalLabel" style="margin-top: -10px;margin-bottom: -10px;">Atenção</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align:center;">Não foi possível concluir o registro!</p>
                        <!-- <p style="text-align: center;font-size: 15px;"><b>Prazo: 2 horas<br> Limite de atraso: 20 minutos</b></p> --> <br>
                        <span style="font-style: italic;font-size: 14px;">* E-mail ou CPF já se encontra em uso.</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="exampleModalLabel" style="margin-top: -10px;margin-bottom: -10px;">Atenção</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align:center;">Registro concluído com sucesso!</p>
                        <!-- <p style="text-align: center;font-size: 15px;"><b>Prazo: 2 horas<br> Limite de atraso: 20 minutos</b></p> --> <br>
                        <span style="font-style: italic;font-size: 14px;">* Obrigado pela confiança e preferencia.</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
