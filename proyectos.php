<?php include('header.php'); ?>
<meta name="description" content="">
<title>Donativos - UnidosUM</title>
<?php include('nav-single.php');
    include('fixed-total.php'); ?>

<body>
    <div class="donaciones container text-center" style="margin-top:12%;">
        <div class="row" style="padding:5px;">
            <div class="col-md-12 separacion">
                <h3><strong>FAMILIA UM</strong></h3>
                <p>
                    Uni2UM no es solo una página. Es un movimiento para usar la tecnología al servicio de Dios y proyectos sociales. Con fe, oramos a nuestro Dios, porque no solo se necesitan recursos, también oraciones. La comunidad universitaria se une en apoyo a las causas de esta página. Los esfuerzos no se han escatimado, y siempre se pone en marcha toda la maquinaria universitaria, cada estudiante, cada empleado, cada miembro de nuestra casa de estudios con los ojos en la misma mira: UNIDOS.
                </p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-link">
                    <img src="img/Img1.jpg" data-src="img/Img1.jpg" class="img-fluid lazyload" alt="">
                </div>
                <div class="portfolio-caption">
                    <h4>Recolección de Víveres</h4>
                    <p class="text-muted">
                        <br>Ministerio Juvenil y Federación Estudiantil coordinan a los integrantes de clubes y ministerios para llegar a los hogares de Allende y Montemorelos, N.L. Los recursos económicos y víveres serán enviados a los lugares en necesidad.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-link">
                    <img src="img/Img2.jpg" data-src="img/Img2.jpg" class="img-fluid lazyload" alt="">
                </div>
                <div class="portfolio-caption">
                    <h4>Oración</h4>
                    <p class="text-muted">
                        <br>La oración es un pilar fundamental para la realización de esta misión, cada alumno de nuestra institución aparta un momento para la oración. En cada escuela o en el bando de oración permanente, Dios es el centro de la operación. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-link">
                    <img src="img/Img3.jpg" data-src="img/Img3.jpg" class="img-fluid lazyload" alt="">
                </div>
                <div class="portfolio-caption">
                    <h4>Recaudando fondos</h4>
                    <p class="text-muted">
                        <br>Los esfuerzos no se han escatimado, se ha puesto en marcha toda la maquinaria universitaria, cada estudiante, cada empleado, cada miembro de nuestra casa de estudios con los ojos en la misma mira UNIDOS POR OAXACA. </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div style="background:#42007C; padding:35px 0; margin:35px 0 0 0;">
        <div class="container text-center">
            <div class="row" style="padding:5px;">
                <div class="col-sm-6 referencia" style="">
                    <h6 style="color: white;">Si deseas ser agregado a nuestra lista de agradecimiento o requieres una factura: <br> </h6>
                    <h2 class="mail-modal"><a style="margin: 5px !important;" class="btn btn-xl CTA-button portfolio-link m-4" data-toggle="modal" href="#modalFactura">Haz clic aquí</a></h2>
                </div>
                <div class="col-sm-4 blue-title" style="margin: auto auto; margin-left:0; padding:0;">
                    <h4 class="title">REFERENCIA BANCARIA:</h4>
                    <h1 class="team" style="text-transform:initial; ">uni2</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="modalFactura" tabindex="-1" role="dialog" aria-hidden="true" style="overflow: auto !important;">
        <div class="modal-dialog">
            <div class="modal-content" style="background:#EDE7F6">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div>
                                <div class="cognito">
                                    <script src="https://services.cognitoforms.com/s/ju-Nk-Gc3k2D2bAvjr2PGw"></script>
                                    <script>
                                    Cognito.load("forms", { id: "1" });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
    #MP-Checkout-dialog {
        z-index: 9999999999 !important;
    }
    </style>
    <script type="text/javascript">
    (function() {
        function $MPC_load() { window.$MPC_loaded !== true && (function() { var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                s.src = document.location.protocol + "//secure.mlstatic.com/mptools/render.js"; var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
                window.$MPC_loaded = true; })(); } window.$MPC_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null; })();
    </script>
    <?php
   include('footer.php');
?>