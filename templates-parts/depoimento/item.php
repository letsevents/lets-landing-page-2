<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="card-depoimento">
                <div class='text-center card-depoimento__img-wrapper'>
                    <div class="card-depoimento__img" data-bg="<?php echo get_field('foto') ?>">
                    </div>

                    <div class="depoimento-nome">
                        <?php echo get_field('autor') ?>, <?php echo get_field('referencia_do_autor') ?>
                    </div>
                </div>
                <div class='card-depoimento__content'>
                    <h2><?php echo get_field('titulo') ?></h2>
                    <p>
                        <?php echo get_field('depoimento') ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
