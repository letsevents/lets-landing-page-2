<section id="ola-tecnologia" style="background-image: url(<?php echo get_field('background_ola_tecnologia')?>)">

    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class='page-content'>
                    <h1>
                        <?php echo get_field('saudacao')?>
                        <span id="areas-atuacao"></span>
                    </h1>
                    <p class='title-subtext'>
                        <?php echo get_field('paragrafo_ola_tecnologia')?>
                    </p>

                    <a class="btn-verde uppercase" href="https://app.lets.events/events/new?utm_source=landingV2&utm_medium=homecta"> <?php echo get_field('botao-ola-tecnologia')?></a>
                </div>
            </div>
        </div>
    </div>

    <a href="#mesma-plataforma" class="role">
        <?php echo get_field('role_para_ver_mais')?>
        <br/>
        <span class='down'>⇓</span>
    </a>
</section><!-- ola-tecnologia -->

<script>
$(function () {
    var areas = $("#areas-atuacao").html();
    var palavras = "<?php echo get_field('areas-atuacao')?>"  ;
    var listaPalavras = palavras.split(',');
    changeWords(listaPalavras, 2500);
});
</script>
