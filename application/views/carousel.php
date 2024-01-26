<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">


<section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-7f11">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-subtitle u-text u-text-default u-text-grey-60 u-text-1">SERVIÇOS SOLICITADOS</h2>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php foreach ($pedidos as $p) { ?>
                        <!-- o nome do motoboy e foto, horário de início do transporte, horário previsto para entrega e valor do frete. -->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <?php if ($p->foto_m == '') { ?>
                                        <img src="<?php echo base_url('images/null.png')?>" alt="" class="card-img">
                                    <?php } else { ?> <img src="<?php echo base_url('uploads/' . $p->foto_m) ?>" alt="" class="card-img"> <?php } ?>
                                </div>
                            </div>
                            <div class="card-content">
                                <h5 class="card-title">                               
                                    <?php 
                                        echo  '<i class="fa-solid fa-user"></i> <b>Motoboy</b>: ';  
                                        if ($p->nome_m == '') {
                                            echo 'N/A';
                                        } else  {
                                            echo $p->nome_m;
                                        } 
                                    ?>
                                </h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <img align="left" width="20" src="<?php echo base_url('images/horaI.png')?>" alt=""> <span class="info-entrega"><b>Início:</b> <?php if ($p->horarioInicio == '') {
                                    echo 'N/A';
                                } else echo date('H:i:s',strtotime($p->horarioInicio))?></span>
                                </li>
                                <li class="list-group-item"> <img align="left" width="20" src="<?php echo base_url('images/horaF.png')?>" alt=""> <span class="info-entrega"><b>Previsto:</b> <?php if ($p->horarioPrevisto == '') {
                                    echo 'N/A';
                                } else echo date('H:i:s',strtotime($p->horarioPrevisto)); ?></span></li>
                                <li class="list-group-item"> <img align="left" width="20" src="<?php echo base_url('images/valorF.png')?>" alt=""> <span class="info-entrega"><b>Frete:</b> <?php echo "R$ ". $p->valorFrete ?></span></li>
                                <li class="list-group-item"> <img align="left" width="20" src="<?php echo base_url('images/cepO.png') ?>" alt=""> <span class="info-entrega"><b>Origem:</b> <?php echo $p->cep_origem ?></span></li>
                                <li class="list-group-item"> <img align="left" width="20" src="<?php echo base_url('images/cepD.png')?>" alt=""> <span class="info-entrega"><b>Destino:</b> <?php echo $p->cep_destino ?></span></li>
                            </ul>
                            <button class="button" disabled value="<?php echo $p->status ?>"><?php echo $p->status ?>
                        </button>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<style>
    .list-group-item {
        text-align: left;
    }
    span.info-entrega {
        margin-left: 3%;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="<?php echo base_url('js/carousel.js') ?>"></script>
<script src="<?php echo base_url('js/clientes.js') ?>"></script>