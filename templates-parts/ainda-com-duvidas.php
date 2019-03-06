<section id="ainda-com-duvidas">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <h2 class="big-title">
                    <?php echo get_field('ainda_com_duvidas_titulo') ?>
                </h2>
            </div>
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <p>
                    <?php echo get_field('ainda_com_duvidas_descricao') ?>
                </p>
                <button class="btn-verde" data-toggle="modal" data-target="#faleConsultor">
                    <?php echo get_field('ainda_com_duvidas_botao') ?>
                </button>
            </div>
        </div>
    </div>

    <div class="container footer">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <h2 class="hidden-xs" >Lets.events</h2>
                <ul class="list-inline social">
                    <li>
                        <a href="https://facebook.com/letseventsofficial" target="_blank">
                            <img data-src="<?php echo plugins_url('../img/Facebook@2x.png', __FILE__) ?>" alt="Lets.events facebook" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/lets_events" target="_blank">
                            <img data-src="<?php echo plugins_url('../img/Twitter@2x.png', __FILE__) ?>" alt="Lets.events Twitter" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/lets.events" target="_blank">
                            <img data-src="<?php echo plugins_url('../img/Instagram@2x.png', __FILE__) ?>" alt="Lets.events Instagram" class="img-responsive">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="row">
                    <div class="col-sm-4">
                        <h2><?php echo get_field('institucional') ?></h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://blog.lets.events">Blog</a>
                            </li>
                            <li>
                                <a href="#melhores-taxas-anchor">
                                    <?php echo get_field('preco') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h2><?php echo get_field('solucoes_para_organizadores') ?>
                            </h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://lets.events/listas-de-convidados/">
                                    <?php echo get_field('gestao_de_listas') ?>
                                </a>
                            </li>
                            <li>
                                <a href="#venda-ingressos">
                                    <?php echo get_field('venda_de_ingressos') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h2><?php echo get_field('suporte') ?></h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://support.lets.events/">
                                    <?php echo get_field('duvidas_frequentes') ?>
                                </a>
                            </li>
                            <li>
                                <a href="https://app.lets.events/terms-of-use">
                                    <?php echo get_field('termos_de_uso') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>

    <?php include 'form.php'; ?>
</section>
<!-- #ainda-com-duvidas -->
