<section id="ola-tecnologia" style="background-image: url(<?php echo get_field('background_ola_tecnologia')?>)">

    <?php include 'navbar.php'; ?>
    <h1 style="font-size: 0;width: 1px;height: 1px;display: inline-block;overflow: hidden;position: absolute!important;border: 0!important;padding: 0!important;margin: 0!important;clip: rect(1px,1px,1px,1px);"><?php echo get_field('title') ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class='page-content'>
                    <div id="saudacao">
                        <?php echo get_field('saudacao')?>
                        <span id="areas-atuacao"></span>
                    </div>
                    <h2 class='title-subtext'>
                        <?php echo get_field('paragrafo_ola_tecnologia')?>
                    </h2>

                    <?php echo get_field('ctas_do_ola_tecnologia')?>
                </div>
            </div>
        </div>
    </div>

    <a href="#mesma-plataforma" class="role">
        <?php echo get_field('role_para_ver_mais')?>
        <br/>
        <span class='down'>↓</span>
    </a>
</section><!-- ola-tecnologia -->

<script>
    var palavras = "<?php echo get_field('areas-atuacao')?>"  ;
    window.listaPalavras = palavras.split(',');
</script>
