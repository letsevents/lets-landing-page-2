<section id="venda-mais" class="animacao">
    <span id='venda-ingressos'></span>
    <div class="container">

        <div class="row equal ">

            <div class="col-xs-12 visible-xs visible-sm">
                <img src="<?php echo plugins_url('../img/ingresso.svg', __FILE__); ?>" alt="" class="img-responsive">
            </div>

            <div class="col-xs-12 col-md-7 col-md-offset-5 col-lg-6 col-lg-offset-6">
                <h2>
                    <?php echo get_field('vendas_mais_titulo') ?>
                </h2>
                <ul class="lista">
                    <li>
                        <i class="em em-rocket"></i>
                        <?php echo get_field('vendas_mais_lista_item_1')?>
                    </li>
                    <li>
                        <i class="em em-bar_chart"></i>
                        <?php echo get_field('vendas_mais_lista_item_2')?>
                    </li>
                    <li>
                        <i class="em em-money_mouth_face"></i>
                        <?php echo get_field('vendas_mais_lista_item_3')?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section><!-- venda-mais -->
