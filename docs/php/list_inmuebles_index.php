<?PHP
include('conexion.php');
//Filtros   
$propiedad = "";
$operacion = "";
$localidad = "";
$limit = "";
if (isset($_REQUEST['propiedad'])) {
    if (!empty($_REQUEST['propiedad'])) {
        $propiedad = " and idPropiedad = '" . $_REQUEST['propiedad'] . "'";
    }
}
if (isset($_REQUEST['operacion'])) {
    if (!empty($_REQUEST['operacion'])) {
        $operacion = " and idOperacion = '" . $_REQUEST['operacion'] . "'";
    }
}
if (isset($_REQUEST['localidad'])) {
    if (!empty($_REQUEST['localidad'])) {
        $localidad = " and idLocalidad = '" . $_REQUEST['localidad'] . "'";
    }
}
$filtro = $propiedad . $operacion . $localidad;
// echo "Propiedad: " . $propiedad . "<br>";
//echo "Operacion: " . $operacion . "<br>";
//echo "Localidad: " . $localidad . "<br>";   
//echo $filtro;
if (empty($filtro)) {
    $limit = "LIMIT 7";
}
$queryinmuebles = "SELECT * FROM vista_inmuebles WHERE baja != '1' $filtro ORDER BY fecha DESC $limit";

$rtsinmuebles = mysqli_query($conexion, $queryinmuebles);

$listado = "";

while ($inmuebles = mysqli_fetch_assoc($rtsinmuebles)) {

    $queryimagen = "SELECT * FROM imagen WHERE idInmueble = '$inmuebles[idInmueble]' AND baja != '1' ORDER BY ordenImagen ASC LIMIT 1";
    $rtsimagen = mysqli_query($conexion, $queryimagen);
    $img = mysqli_fetch_assoc($rtsimagen);
    $idimg = $img['idImagen'];
    $tpimg = $img['tipoImagen'];
    $nomimg = "gestion/assets/images/inmuebles/" . str_pad($idimg, 8, "0", STR_PAD_LEFT) . "." . $tpimg;

    if (!file_exists($nomimg)) {
        $nomimg = "gestion/assets/images/inmuebles/00000000.png";
    }
    if ($inmuebles['habitacionesInmueble'] > 0) {
        $habitacionesInmueble = $inmuebles['habitacionesInmueble'];
    } else {
        $habitacionesInmueble = "-";
    };
    if ($inmuebles['banosInmueble'] > 0) {
        $banosInmueble = $inmuebles['banosInmueble'];
    } else {
        $banosInmueble = "&nbsp;-&nbsp;";
    };
    if ($inmuebles['superficieCubiertaInmueble'] > 0) {
        $superficieCubiertaInmueble = $inmuebles['superficieCubiertaInmueble'];
    } else {
        $superficieCubiertaInmueble = "-";
    };
    if ($inmuebles['valorInmueble'] > 0) {
        $valorInmueble = $inmuebles['monedaInmueble'] . "</b>&nbsp;" . $inmuebles['valorInmueble'];
    } else {
        $valorInmueble = "Consultar";
    };
    $domicilio = "";
    if (!empty($inmuebles['domicilioCalleInmueble'])) {
        $domicilio .= $inmuebles['domicilioCalleInmueble'];
    }
    if (!empty($inmuebles['domicilioNumeroInmueble'])) {
        $domicilio .= " " . $inmuebles['domicilioNumeroInmueble'];
    }
    if (!empty($inmuebles['domicilioOrientacionInmueble'])) {
        $domicilio .= " " . $inmuebles['domicilioOrientacionInmueble'];
    }
    if (!empty($inmuebles['nombreLocalidad'])) {
        $domicilio .= " - " . $inmuebles['nombreLocalidad'] . "</b>";
    }

    $nombreOperacion = $inmuebles['nombreOperacion'];
    $nombreLocalidad = $inmuebles['nombreLocalidad'];


    $listado .= "<div class='col-md-4'>";
    $listado .= "<div class='property-wrap ftco-animate'>";
    $listado .= "<div class='img d-flex align-items-center justify-content-center' style='background-image: url(" . $nomimg . ")'>";
    $listado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "' class='icon d-flex align-items-center justify-content-center btn-custom'>";
    $listado .= "<span class='ion-ios-link'></span>";
    $listado .= "</a>";
    $listado .= "<div class='list-agent d-flex align-items-center'>";
    $listado .= "<a class='agent-info d-flex align-items-center'>";
    $listado .= "<div class='img-2 rounded-circle' style='background-image: url(images/img-logo/venta.png)'></div>";
    $listado .= "<h3 class='mb-0 ml-2'>" . $nombreOperacion . "</h3>";
    $listado .= "</a>";
    $listado .= "</div>";
    $listado .= "</div>";
    $listado .= "<div class='text'>";
    $listado .= "<p class='price mb-3'>";
    $listado .= "<span class='orig-price'>" . $valorInmueble . "<small></small></span>";
    $listado .= "</p>";
    $listado .= "<h3 class='mb-0'>";
    $listado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "'>" .  $inmuebles['tituloInmueble'] . "</a>";
    $listado .= "</h3>";
    $listado .= "<span class='location d-inline-block mb-3'><i class='ion-ios-pin mr-2'></i>" . $domicilio . "</span>";
    $listado .= "<ul class='property_list'>";
    $listado .= "<li><span class='flaticon-bed'></span>" . $habitacionesInmueble . "</li>";
    $listado .= "<li><span class='flaticon-bathtub'></span>" . $banosInmueble . "</li>";
    $listado .= "<li><span class='flaticon-floor-plan'></span>" . $superficieCubiertaInmueble . " m2</li>";
    $listado .= "</ul>";
    $listado .= "</div>";
    $listado .= "</div>";
    $listado .= "</div>";
}
//$listado .= "</div>";
