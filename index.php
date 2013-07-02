<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PROA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="themes/default/style.css">        
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="content">
            <h1>MERCADO VERTICAL</h1>
            <div id="mv">
                <a href="selectmarca.php?mv=GOBIERNO/AEROPUERTOS" data-hover"1_1.jpg">
                    <img src="img/mercadoVertical/gobiernoAeropuertosMilitar.jpg" width="200">
                    <span>GOBIERNO/AEROPUERTOS</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/comercial.jpg" width="200">
                    <span>COMERCIAL</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/bancosFinanciero.jpg" width="200">
                    <span>BANCOS/FINANCIERO</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/prisiones.jpg" width="200">
                    <span>PRISONES</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/escuelas.jpg" width="200">
                    <span>ESCUELAS</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/hospitales.jpg" width="200">
                    <span>HOSPITALES</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/industrial.jpg" width="200">
                    <span>INDUSTRIAL</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/edificiosOficinas.jpg" width="200">
                    <span>EDIFICIOS DE OFICINAS</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/residencialVertical.jpg" width="200">
                    <span>RESIDENCIAL VERTICAL</span>
                </a>
                <a href="#">
                    <img src="img/mercadoVertical/hoteles.jpg" width="200">
                    <span>HOTELES</span>
                </a>
            </div><!--/mv-->
            <div id="demo1" class="demo" style="height:100px;">
    <ul>
        <li id="phtml_1">
            <a href="#">Root node 1</a>
            <ul>
                <li id="phtml_2">
                    <a href="#">Child node 1</a>
                </li>
                <li id="phtml_3">
                    <a href="#">Child node 2</a>
                </li>
            </ul>
        </li>
        <li id="phtml_4">
            <a href="#">Root node 2</a>
        </li>
    </ul>
</div>
        </div><!--/content-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/jquery.jstree.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/jquery.hotkeys.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" class="source below">
$(function () {

    $("#demo1")        
        .jstree({            
            "plugins" : ["themes","html_data","ui","crrm","hotkeys"],            
            "core" : { "initially_open" : [ "phtml_1" ] }            
        })
});
</script>

    </body>
</html>
