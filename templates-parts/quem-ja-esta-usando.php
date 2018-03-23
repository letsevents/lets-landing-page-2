<section id="quem-ja-esta-usando">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>
                    <?php echo get_field('veja_quem_ja_esta_usando') ?>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php include 'depoimentos.php';?>
            </div>
        </div>

        <div id="logo-clientes" class="row">
            <img data-src="<?php echo get_field('quem_ja_esta_usando_logo_1') ?>" alt="" class="img-responsive">
            <img data-src="<?php echo get_field('quem_ja_esta_usando_logo_2') ?>" alt="" class="img-responsive">
            <img data-src="<?php echo get_field('quem_ja_esta_usando_logo_3') ?>" alt="" class="img-responsive">
            <img data-src="<?php echo get_field('quem_ja_esta_usando_logo_4') ?>" alt="" class="img-responsive">
            <img data-src="<?php echo get_field('quem_ja_esta_usando_logo_5') ?>" alt="" class="img-responsive">
            <img data-src="<?php echo get_field('quem_ja_esta_usando_logo_6') ?>" alt="" class="img-responsive">
        </div>

    </div>
    <!-- container -->
</section>
