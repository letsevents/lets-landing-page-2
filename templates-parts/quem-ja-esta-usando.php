<section id="quem-ja-esta-usando">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="big-title">
                    <?php echo get_field('veja_quem_ja_esta_usando') ?>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php include 'depoimentos.php';?>
            </div>
        </div>

        <div id="logo-clientes" class="row">
            <?php
                $i = 1;
                while(true) {
                    $logo = get_field('quem_ja_esta_usando_logo_' . $i);
                    $i++;
                    if (!$logo) { break; } ?>
                <img data-src="<?php echo $logo ?>" alt="logo" class="img-responsive">
            <?php } ?>
        </div>

    </div>
    <!-- container -->
</section>
