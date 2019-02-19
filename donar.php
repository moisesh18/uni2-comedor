<?php include('header.php'); ?>
<meta name="description" content="">
<title>Donativos - UnidosUM</title>
<?php include('nav-single.php');
    include('fixed-total.php'); ?>
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
<body>
    <div class="donaciones container text-center" style="margin-top:12%;">
        <div class="row" style="padding:5px;">
            <div class="col-md-12 separacion">
                <h3><strong>PAGO  EFECTIVO, DÉBITO Y CRÉDITO</strong></h3>
                <p>Tu donativo puede ser hecho en efectivo en sucursales OXXO, 7-Eleven, Telecomm, Bancomer, Banamex y Santander. También si lo prefieres, puedes pagar con tarjeta de débito de los bancos Bancomer, Banamex, Santander, Banorte e IXE o con tarjetas de crédito VISA, MasterCard y AmericanExpress. </p>
                <div class="row row-eq-height datos vcenter">
                    <div class="col-sm-6 col-md-6 col-lg-3 np">
                        <a mp-mode="modal" href="https://www.mercadopago.com/mlm/checkout/start?pref_id=402624857-a28c65ff-8af7-45ac-89e5-9a84591e8a2d" name="MP-payButton" class='btn btn-xl CTA-button m-2 blue-ar-l-rn-none'>Donación <br> $50MXN</a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 np">
                        <a mp-mode="modal" href="https://www.mercadopago.com/mlm/checkout/start?pref_id=402624857-7e9fdac9-17ce-48f7-acae-05ae90e72e41" name="MP-payButton" class='btn btn-xl CTA-button m-2'>Donación <br> $100MXN</a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 np">
                        <a mp-mode="modal" href="https://www.mercadopago.com/mlm/checkout/start?pref_id=402624857-cc0c08a0-5fae-4c36-a1e5-f0510cb6348b" name="MP-payButton" class='btn btn-xl CTA-button m-2'>Donación <br> $200MXN</a>
                    </div>
                    <!-- swal(''); -->
                    <div class="col-sm-6 col-md-6 col-lg-3 np">
                        <a onClick='swal({
                            text: "MercadoPago no permite la personalización de este formulario, y aunque mencione que será una suscripción automática, pero solo se cobrará una vez y para siempre. Estamos comprometidos en esto.",
                            buttons: true
                            })
                            .then((willDelete) => {
                            if (willDelete) {
                                document.getElementById("definirmonto").click() 
                            }
                            });' class='btn btn-xl CTA-button m-2'>Definir <br> el monto</a>
                        <a mp-mode="modal" id="definirmonto" href="http://mpago.la/1oB6yk" name="MP-payButton" class='d-none btn btn-xl CTA-button m-2'>Definir <br> el monto</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12 separacion">
                <h3><strong>PAGOS INTERNACIONALES CON TARJETAS DE DÉBITO Y CRÉDITO</strong></h3>
                <p>Tu donación será realizada con la tecnología de <strong>Paypal</strong>. Puedes donar con VISA, MasterCard & AmericanExpress...</p>
                <div class="row row-eq-height datos vcenter">
                    <div class="col-sm-12 np">
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VM5HM9JTHRR6G" class='btn btn-xl CTA-button m-2'>Definir el monto</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-12 separacion">
                <h3><strong>Transferencia Bancaria o Deposito en Ventanilla</strong></h3>
                <p>Información para que puedas hacer una transferencia electrónica a través del portal en línea de tu banco.
                    <br> Tu aportación se reflejará en un máximo de 48 horas.</p>
                <p class="text-center" style="font-weight:900;">Datos bancarios de ADRA MÉXICO.</p>
                <div class="row row-eq-height datos vcenter">
                    <div class="col-md-3 np">
                        <h4>NOMBRE</h4>
                        <p>Agencia Adventista de Desarollo y Recursos Asistenciales AC
                        </p>
                    </div>
                    <div class="col-md-3 np">
                        <h4>CUENTA</h4>
                        <p>
                            <br>0196482139</p>
                    </div>
                    <div class="col-md-3 np">
                        <h4>BANCO</h4>
                        <p>
                            <br>BBVA Bancomer</p>
                    </div>
                    <div class="col-md-3 np">
                        <h4>CLABE</h4>
                        <p>
                            <br>012180001964821397</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    </div>
    <div style="background:#42007C; padding:35px 0; margin:35px 0 0 0;">
        <div class="container text-center">
            <div class="row" style="padding:5px;">
                <div class="col-sm-6 referencia" style="">
                    <h6 style="color: white;">Si deseas ser agregado a nuestra lista de agradecimiento<br> </h6>
                    <h2 class="mail-modal"><a style="margin: 5px !important;" class="btn btn-xl CTA-button portfolio-link m-4" data-toggle="modal" href="#modalFactura">Haz clic aquí</a></h2>
                </div>
                <div class="col-sm-4 blue-title" style="margin: auto auto; margin-left:0; padding:0;">
                    <!-- <h4 class="title">REFERENCIA BANCARIA:</h4> -->
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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