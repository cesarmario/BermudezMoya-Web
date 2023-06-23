<?PHP
include('php/list_opciones.php');
include('php/list_inmuebles_index.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Bermudez Moya</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/img-logo/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/img-logo/logo-prueba1.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="nosotros.html" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="servicios.html" class="nav-link">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="agentes.html" class="nav-link">Agentes</a>
                    </li>
                    <li class="nav-item">
                        <a href="propiedades.php" class="nav-link">Propiedades</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.html" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section>
        <div class="hero-wrap" style="background-image: url('images/img-portadas/lista16.jpeg" data-stellar-background-ratio="0.3">
            <div class="overlay"></div>
            <div class="overlay-2"></div>
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12 ftco-animate d-flex">
                        <div class="text text-center w-70">
                            <h1 class="mb-2" font-family="Josefin+Sans">
                                Hacemos de tus sueños, <br />nuestro trabajo
                            </h1>

                            <div class="ftco-section ftco-properties" id="properties-section"></div>
                            <h5>Busca y encuentra tu propiedad</h5>
                            <form class="form-inline">
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option value="">Todas las propiedades</option>
                                    <?PHP while ($propiedad = mysqli_fetch_assoc($rtspropiedad)) { ?>
                                        <option value="<?PHP echo $propiedad['idPropiedad']; ?>"> <?PHP echo $propiedad['nombrePropiedad']; ?></option>
                                    <?PHP } ?>
                                </select>

                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option value="">Todas las operaciones</option>
                                    <?PHP while ($operacion = mysqli_fetch_assoc($rtsoperacion)) { ?>
                                        <option value="<?PHP echo $operacion['idOperacion']; ?>"> <?PHP echo $operacion['nombreOperacion']; ?></option>
                                    <?PHP } ?>
                                </select>

                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option value="">Todas las localidades</option>
                                    <?PHP while ($localidad = mysqli_fetch_assoc($rtslocalidad)) { ?>
                                        <option value="<?PHP echo $localidad['idLocalidad']; ?>"> <?PHP echo $localidad['nombreLocalidad']; ?></option>
                                    <?PHP } ?>
                                </select>

                                <button type="submit" class="btn btn-primary my-1">
                                    Buscar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Te ofrecemos lo mejor</span>
                    <h2 class="mb-2">Últimas propiedades agregadas</h2>
                </div>
            </div>
            <div class="row">
                <?PHP echo $listado; ?>

                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <p>
                        <a href="propiedades.php" class="btn btn-primary py-3 px-4">Ver todas las Propiedades disponibles</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-fullwidth">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Servicios</span>
                    <h2 class="mb-2">¿Por qué escogernos?</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row d-md-flex text-wrapper align-items-stretch">
                <div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch" style="background-image: url('images/about.jpg')"></div>
                <div class="one-half half-text d-flex justify-content-end align-items-center">
                    <div class="text-inner pl-md-5">
                        <div class="row d-flex">
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-piggy-bank"></span>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h3>Ahorrás dinero</h3>
                                        <p>
                                            Sin pagos extras por publicar el inmueble, sin cargos
                                            por consultas ni asesoramiento.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-wallet"></span>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h3>Aceptamos todos los medios de pago</h3>
                                        <p>
                                            A la hora de pagar, podés hacerlo con débito, crédito,
                                            efectivo o transferencias.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-file"></span>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h3>Estamos matriculados</h3>
                                        <p>
                                            Somos Corredores Inmobiliarios Matriculados y estamos
                                            habilitados para realizar el mejor trabajo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="flaticon-locked"></span>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h3>Seguridad</h3>
                                        <p>
                                            Brindamos seguridad y confianza a nuestros clientes, sea
                                            para compra, venta o alquiler de inmuebles.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section img" id="section-counter">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="19">0</strong>
                            <span>Departamentos <br />de San Juan</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="150">0</strong>
                            <strong class="number">+</strong><span>Total de<br />Propiedades</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="250">0</strong>
                            <strong class="number">+</strong><span>Operaciones <br />Realizadas</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="100">0</strong>
                            <strong class="number">%</strong>
                            <span>Clientes <br />Satisfechos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonios</span>
                    <h2 class="mb-3">Clientes Satisfechos</h2>
                </div>
            </div>
            <div class="row ftco-animate" align="justify">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">
                                        Alquilé mi primera casa con Bermudez Moya y me fue de
                                        maravillas. No tenía idea de lo que se debe tener en
                                        cuenta y me facilitaron todo.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Andrés Garay</p>
                                            <span class="position">Empleado Público</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">
                                        Buscaba comprar una casa de fin de semana y Bermudez Moya
                                        tenía varias en carpeta. Compré todas. Ellos se encargaron
                                        de todo.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Mario Alejo Morales</p>
                                            <span class="position">Fabricante de muñecos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">
                                        Muy buena atención y servicio. Contestaron cada una de mis
                                        preguntas y en 5 minutos me volví experto en el tema.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Facundo Baleriano</p>
                                            <span class="position">Futbolista</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">
                                        Adquirí la llave de mi negocio y en la mejor zona de
                                        Rivadavia. Destaco la atención y la paciencia con el
                                        cliente.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Gabriel Trincado</p>
                                            <span class="position">Fan de Wanda Nara</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">
                                        Gente profesional y, por sobre todo, habilitada, lo cual
                                        me deja muy tranquilo ya que saben como proceder
                                        legalmente.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Mario C. De los Ríos</p>
                                            <span class="position">Productor Musical</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">
                            <img src="images/img-logo/logo-prueba1.jpeg" alt="" />
                        </h2>
                        <p align="justify">
                            Soy Corredor Inmobiliario matriculado y estoy dispuesto a
                            trabajar por tus sueños.
                        </p>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Enlaces de Interés</h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="http://www.corredoresinmobiliariossj.org/#!/-inicio/"><span class="icon-long-arrow-right mr-2"></span>C.P.C.I.S.J.</a>
                            </li>
                            <li>
                                <a href="https://www.enlaceinmobiliario.com.ar/"><span class="icon-long-arrow-right mr-2"></span>Enlace
                                    Inmobiliario</a>
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
                                <a href="#"><span class="icon-long-arrow-right mr-2"></span>Nosotros</a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-long-arrow-right mr-2"></span>Servicios</a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-long-arrow-right mr-2"></span>Agentes</a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-long-arrow-right mr-2"></span>Propiedades</a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-long-arrow-right mr-2"></span>Contacto</a>
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
                                    <a href="#"><span class="icon icon-whatsapp"></span><span class="text">+54 264 670 5459</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span class="text">+54 264 672 5589</span></a>
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
                    <a>Bermudez Moya Gestión Inmobiliaria | Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        | Todos los Derechos Reservados
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

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