<?php include_once 'functions.php'; ?>﻿
<html>
    <head>
        <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo plugins_url('css/styles-ls2.css', __FILE__) ?>">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <title>
            <?php echo get_field('title') ?>
        </title>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W8CPHGT');</script>
        <!-- End Google Tag Manager -->
        <?php wp_head() ?>
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8CPHGT"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <?php include 'templates-parts/ola-tecnologia.php'; ?>
        <?php include 'templates-parts/mesma-plataforma.php'; ?>
        <?php include 'templates-parts/venda-mais.php'; ?>
        <?php include 'templates-parts/sua-lista.php'; ?>
        <?php include 'templates-parts/formidaveis.php'; ?>
        <?php include 'templates-parts/melhores-taxas.php'; ?>
        <?php include 'templates-parts/sua-audiencia.php'; ?>
        <?php include 'templates-parts/conheca-seu-publico.php'; ?>
        <?php include 'templates-parts/menos-fila.php'; ?>
        <?php include 'templates-parts/quem-ja-esta-usando.php'; ?>
        <?php include 'templates-parts/ainda-com-duvidas.php'; ?>
        <?php include 'templates-parts/lets-2-min.php'; ?>
        <?php include 'templates-parts/modal.php'; ?>
        <?php include 'templates-parts/cta-fixo.php'; ?>
        <!-- Scripts -->

        <?php wp_footer() ?>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazyloadxt/1.0.0/jquery.lazyloadxt.extra.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazyloadxt/1.0.0/jquery.lazyloadxt.bg.min.js"></script>
        <script src="<?php echo plugins_url('./js/bootstrap.min.js', __FILE__) ?>"></script>
        <script src="<?php echo plugins_url('./js/main.js', __FILE__) ?>"></script>
    </body>
</html>
