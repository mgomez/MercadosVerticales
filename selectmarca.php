<?php
    @$mv = $_REQUEST["mv"];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PROA | Seleccione una marca</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="content">
            <h1><?=$mv?></h1>
            <a id="volver" href="index.html" title="volver"><img src="img/volver.png"></a>
            <a id="home" href="index.html" title="pagina principal"><img src="img/home.png"></a>
            <div id="mv">                                
                <p><small>Seleccione una Marca</small></p>

                <a href="selectsolucion.php?m=STANLEY" data-hover"1_1.jpg">
                    <img src="img/STANLEY.jpg" width="200">
                    <span>STANLEY</span>
                </a>
                <a href="#">
                    <img src="img/Assa Abloy.jpg" width="200">
                    <span>Assa Abloy</span>
                </a>
                <a href="#">
                    <img src="img/IngersollRand.jpg" width="200">
                    <span>IngersollRand</span>
                </a>                
            </div>
        </div><!--/content-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
