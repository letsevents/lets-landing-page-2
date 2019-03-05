<section id="ola-tecnologia" style="background-image: url(<?php echo get_field('background_ola_tecnologia')?>)">

    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class='page-content'>
                    <div id="saudacao">
                        <?php echo get_field('saudacao')?>
                        <span id="areas-atuacao"></span>
                    </div>
                    <h1 class='title-subtext'>
                        <?php echo get_field('paragrafo_ola_tecnologia')?>
                    </h1>

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
