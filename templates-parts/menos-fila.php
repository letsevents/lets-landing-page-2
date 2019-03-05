<section id="menos-fila">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="big-title">
                    <?php echo get_field('menos_fila_titulo') ?>
                </h2>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <p>
                    <?php echo get_field('menos_fila_descricao') ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                <video playsinline="" autoplay="" muted="" loop="" id="app-demo" class="" data-mp4="true">
                    <source data-src="<?php echo plugins_url('../video/demo.mp4', __FILE__) ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section><!-- menos-fila -->
