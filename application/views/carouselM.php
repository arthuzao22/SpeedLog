<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
<script src="<?php echo base_url('js/carouselmoto1.js')?>" defer=""></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-7f11">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-subtitle u-text u-text-default u-text-grey-60 u-text-1">SERVIÇOS PENDENTES</h2>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    <?php foreach ($pedidosM as $p) { ?>

                        <!-- o nome do motoboy e foto, horário de início do transporte, horário previsto para entrega e valor do frete. -->
                        <div class="card swiper-slide" id="cardM">
                            <div class="image-content">
                                <span class="overlay">
                                <span style="position:absolute; right: 20;top: 0;color:white;"><b>N°: <?php echo $p->idEntrega ?></b></span>
                                </span>
                                <div class="card-image">
                                    <img src="https://cdn-icons-png.flaticon.com/512/6009/6009864.png" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h5 class="card-title">
                                    <?php
                                    $newname = explode(" ", $p->nome);
                                    echo  '<i class="fa-solid fa-user"></i> <b>Cliente</b>: ' . $newname[0] . " " . end($newname);
                                    ?>
                                </h5>
                            </div>
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item"><img align="left" width="20" src="<?php echo base_url('images/veloz.png') ?>" alt=""> <span class="info-entrega"><b>Distancia:</b> <?php if ($p->distancia >= 1000) {
                                                                                                                                                                                                    echo number_format($p->distancia / 1000) . "km";
                                                                                                                                                                                                } else echo $p->distancia . "m"; ?></span></li>
                                <li class="list-group-item"> <img align="left" width="20" src="<?php echo base_url('images/horaF.png') ?>" alt=""> <span class="info-entrega"><b>Tempo:</b> <?php if ($p->tempo >= 1600) {
                                                                                                                                                                                                echo gmdate("H", $p->tempo) . "h " . gmdate("i", $p->tempo) . "m " . gmdate("s", $p->tempo) . "s";
                                                                                                                                                                                            } else echo gmdate("i", $p->tempo) . "m " . gmdate("s", $p->tempo) . "s" ?></span></li>
                                <li class="list-group-item"> <span class="info-entrega"> <img align="left" width="20" src="<?php echo base_url('images/peso.png') ?>" alt=""><b>Peso: </b><?php echo number_format($p->peso) . "kg" ?> </span></li>
                                <li class="list-group-item"><span class="info-entrega"> <img align="left" width="20" src="<?php echo base_url('images/valorF.png') ?>" alt=""> <b>Frete:</b> R$ <?php echo $p->valorFrete ?></li>
                                <li class="list-group-item"><span class="info-entrega"> <img align="left" width="20" src="<?php echo base_url('images/cepO.png') ?>" alt=""> <b>Origem:</b> <?php echo '' . $p->log_origem . ' <br> ' . '<p style="text-align: center;margin-top: 0;margin-bottom: 0;">' . $p->bairro_origem . '</p>' ?></span></li>
                                <li class="list-group-item"><span class="info-entrega"> <img align="left" width="20" src="<?php echo base_url('images/cepD.png') ?>" alt=""> <b>Destino:</b> <?php echo '' . $p->log_destino . ' <br> ' . '<p style="text-align: center;margin-top: 0;margin-bottom: 0;">' . $p->bairro_destino . '</p>' ?></span></li>
                            </ul>
                            <button class="button" id="<?php echo $p->idEntrega ?>" onclick="modal_alterar(this.id)" value="<?php echo $p->status ?>">Aceitar
                            </button>
                        </div>
                    <?php }
                    ?>



                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        <?php if (count($pedidosM) < 1) {
            echo '<div class="alert alert-danger" role="alert">
            Não existe nenhum pedido pendente!
            </div>';
        }
        ?>
    </div>

</section>
<!-- Modal -->
<div class="modal fade" id="alterar_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel" style="margin-top: -10px;margin-bottom: -10px;">Atenção</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="text-align:center;">Deseja confirmar a solicitação desse serviço? </p>
                <p style="text-align: center;font-size: 15px;"><b>Prazo: 2 horas<br> Limite de atraso: 20 minutos</b></p>
                <span style="font-style: italic;font-size: 14px;">* Caso o prazo não seja cumprido será necessário justificar a administração.</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="alterar">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="<?php echo base_url('js/carousel.js') ?>"></script>


<style>

</style>