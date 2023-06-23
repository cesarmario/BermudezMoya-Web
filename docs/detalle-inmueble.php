<?PHP
include('php/det_inmueble.php');
include('php/list_inmuebles_destacados.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Detalle del Inmueble</title>
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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />

    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="images/img-logo/logo-prueba1.png" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="nosotros.html" class="nav-link">Nosotros</a></li>
                    <li class="nav-item"><a href="servicios.html" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="agentes.html" class="nav-link">Agentes</a></li>
                    <li class="nav-item active"><a href="propiedades.html" class="nav-link">Propiedades</a></li>
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
                    <h1 class="mb-3 bread">Detalles del Inmueble</h1>
                    <p class="breadcrumbs"><span class="mr-2" style="color: crimson;"> Conocé en detalle todo lo que necesites</span></p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="col-md-12 pb-0 mb-0 text-center">
            <h1><?PHP echo $tituloInmueble; ?></h1>
            <p class="breadcrumbs"><span class="mr-2" style="color: crimson;"> <?PHP echo $domicilio; ?></span></p>
        </div>

        <div class="carousel-container">
            <?PHP echo $listadoImg; ?>
            <!-- <div class="carousel-slide">
                <img class="active" src="images/img-detalle/2.jpeg" alt="Image 1">
                <img src="images/img-detalle/3.jpeg" alt="Image 2">
                <img src="images/img-detalle/4.jpeg" alt="Image 3">
                <img src="images/img-detalle/6.jpeg" alt="Image 4">
                <img src="images/img-detalle/7.jpeg" alt="Image 5">
                <img src="images/img-detalle/8.jpeg" alt="Image 6">
                <img src="images/img-detalle/9.jpeg" alt="Image 7">
                <img src="images/img-detalle/10.jpeg" alt="Image 8">
            </div> -->
            <div class="carousel-controls">
                <button class="carousel-prev">&#10094;</button>
                <button class="carousel-next">&#10095;</button>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-property-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex">
                            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Características</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Descripción</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-ubicacion-tab" data-toggle="pill" href="#pills-ubicacion" role="tab" aria-controls="pills-ubicacion" aria-expanded="true">Ubicación</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Propiedad: <b><?PHP echo $nombrePropiedad; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Zona: <b><?PHP echo $nombreLocalidad; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Operación: <b><?PHP echo $nombreOperacion; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Superficie cubierta: <b><?PHP echo $superficieCubiertaInmueble; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Superficie Total: <b><?PHP echo $superficieTotalInmueble; ?></b></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Precio: <b><?PHP echo $valorInmueble; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Habitaciones: <b><?PHP echo $habitacionesInmueble; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Baños: <b><?PHP echo $banosInmueble; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Plantas: <b>1</b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Estado: <b><? echo $estadoInmueble; ?></b></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Cochera cubierta: <b><?PHP echo $cocheraInmueble; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Gas Natural: <b><?PHP echo $gasNaturalInmueble; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Agua corriente: <b><?PHP echo $aguaCorrienteInmueble; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Cloacas: <b><?PHP echo $cloacaInmueble; ?></b></li>
                                            <li class="check"><span class="ion-ios-checkmark-circle"></span>Pavimento: <b><?PHP echo $pavimentoInmueble; ?></b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                <p>
                                    <?PHP echo $descripcionInmueble; ?>
                                </p>
                                <p>
                                    <?PHP echo $informacionAdicionalInmueble; ?>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-ubicacion" role="tabpanel" aria-labelledby="pills-ubicacion-tab">
                                <p> <?PHP echo $domicilio; ?> </p>
                                <?PHP if (!empty($ubicacionInmueble)) { ?>
                                    <div id="myMap" name="myMap" style="height: 400px" required></div>
                                    <a href="https://www.google.com/maps?q=<?PHP echo $ubicacionInmueble; ?>&z=17&hl=es" target="_blank" class="btn btn-info">Ver en el Mapa</a>
                                <?PHP } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="ftco-section ftco-property-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 pb-0 mb-0 text-center">
                    <div class="property-details">
                        <h1>Visita virtual</h1>
                        <div class="img" style="background-image: url(images/work-1.jpg);">
                            <a href="mp4/logo-animado.mp4" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                                <img src="images/img-iconos/circle-play-regular.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?PHP
    $video = "/gestion/assets/videos/" . str_pad($_REQUEST['idInmueble'], 8, "0", STR_PAD_LEFT) . ".mp4";
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $video)) { ?>
        <section class="ftco-section ftco-property-details">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 pb-0 mb-0 text-center">
                        <div class="property-details">
                            <h1>Visita virtual</h1>
                            <div class="img" style="background-image: url(images/work-1.jpg);">
                                <a href="<?PHP echo $video; ?>" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                                    <img src="images/img-iconos/circle-play-regular.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?PHP } ?>

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
                            <li><a href="http://www.corredoresinmobiliariossj.org/#!/-inicio/"><span class="icon-long-arrow-right mr-2"></span>C.P.C.I.S.J.</a></li>
                            <li><a href="https://www.enlaceinmobiliario.com.ar/"><span class="icon-long-arrow-right mr-2"></span>Enlace Inmobiliario</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Preguntas Frecuentes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Navegación</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Nosotros</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Servicios</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Agentes</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Propiedades</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contacto</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">¿Alguna Consulta?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">General Paz 640 (Oeste) oficina 14 y 15 - Capital, San Juan</span></li>
                                <li><a href="#"><span class="icon icon-whatsapp"></span><span class="text">+54 264 670 5459</span></a></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+54 264 672 5589</span></a></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+54 264 528 5352</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@bermudezmoya.com.ar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Bermudez Moya Gestión Inmobiliaria | Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> | Todos los Derechos Reservados</a>
                    </p>
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
    <script src="js/carrusel.js"></script>
    <script src="js/visita-virtual.js"></script>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin="">
    </script>
    <!--script src="assets/js/mapview.js"></script-->

    <script>
        const tilesProvider = "	https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"

        var latlng = "<?= $ubicacionInmueble ?>";
        //console.log("Ubicacion: " + latlng); 

        let coordenadas = latlng.split(',')
        let myMap = L.map('myMap').setView(coordenadas, 15)

        //let myMap = L.map('myMap').setView([-31.5373, -68.5251], 14)

        L.tileLayer(tilesProvider, {
            maxZoom: 18,
        }).addTo(myMap)

        let marker = L.marker(coordenadas).addTo(myMap)
    </script>
</body>

</html>