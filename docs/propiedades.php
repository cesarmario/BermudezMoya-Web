<?PHP
include('php/list_opciones.php');
include('php/list_inmuebles.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Propiedades</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/img-logo/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/img-logo/logo-prueba1.png" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="nosotros.html" class="nav-link">Nosotros</a></li>
                    <li class="nav-item"><a href="servicios.html" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="agentes.html" class="nav-link">Agentes</a></li>
                    <li class="nav-item active"><a href="propiedades.php" class="nav-link">Propiedades</a></li>
                    <li class="nav-item"><a href="contacto.html" class="nav-link">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">Propiedades</h1>
                    <p class="breadcrumbs"><span class="mr-2" style="color: crimson;"> Buscá y estudiá lo que mejor se adapta a vos</span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row">
                <?PHP echo $listado; ?>
            </div>
            <!-- <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"> <img src="images/img-logo/logo-prueba1.jpeg" alt=""> </h2>
                        <p align="justify">Soy Corredor Inmobiliario matriculado y estoy dispuesto a trabajar por tus sueños.</p>

                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Enlaces de Interés</h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="http://www.corredoresinmobiliariossj.org/#!/-inicio/" target="_blank"><span class="icon-long-arrow-right mr-2"></span>C.P.C.I.S.J.</a>
                            </li>
                            <li>
                                <a href="https://www.enlaceinmobiliario.com.ar/" target="_blank"><span class="icon-long-arrow-right mr-2"></span>Enlace
                                    Inmobiliario</a>
                            </li>
                            <li>
                                <a href="http://www.crsargentina.com.ar/" target="_blank"><span class="icon-long-arrow-right mr-2"></span>CRS Argentina</a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-long-arrow-right mr-2"></span>Preguntas
                                    Frecuentes</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Navegación</h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="nosotros.html"><span class="icon-long-arrow-right mr-2"></span>Nosotros</a>
                            </li>
                            <li>
                                <a href="servicios.html"><span class="icon-long-arrow-right mr-2"></span>Servicios</a>
                            </li>
                            <li>
                                <a href="agentes.html"><span class="icon-long-arrow-right mr-2"></span>Agentes</a>
                            </li>
                            <li>
                                <a href="propiedades.php"><span class="icon-long-arrow-right mr-2"></span>Propiedades</a>
                            </li>
                            <li>
                                <a href="contacto.html"><span class="icon-long-arrow-right mr-2"></span>Contacto</a>
                            </li>
                            <li>
                                <a href="gestion/"><span class="icon-long-arrow-right mr-2"></span>Gestion</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">¿Alguna Consulta?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span><span class="text">General Paz 640 (Oeste) oficina 14 y 15 -
                                        Capital, San
                                        Juan</span>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-whatsapp"></span><span class="text">+54 264 581 3030 </span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span class="text">+54 264 672 5589</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span class="text">+54 264 670 5459</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span class="text">+54 264 528 5352</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@bermudezmoya.com.ar</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Bermudez Moya Gestión Inmobiliaria | Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> | Todos los Derechos Reservados</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>