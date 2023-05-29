<?PHP
include('conexion.php');
//Filtros   
$propiedad = "";
$operacion = "";

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

$filtro = $propiedad . $operacion;

$queryinmueblesdest = "SELECT * FROM vista_inmuebles WHERE baja != '1' and idInmueble != '$_REQUEST[idInmueble]' $filtro ORDER BY fecha DESC LIMIT 6";

$rtsinmueblesdest = mysqli_query($conexion, $queryinmueblesdest);


$tituloDestacado = "";
$destacado = "<ul>";
while ($inmueblesdest = mysqli_fetch_assoc($rtsinmueblesdest)) {

    $tituloDestacado = "Propiedades Similares";

    $queryimagenDest = "SELECT * FROM imagen WHERE idInmueble = '$inmueblesdest[idInmueble]' AND baja != '1' ORDER BY ordenImagen ASC LIMIT 1";
    $rtsimagenDest = mysqli_query($conexion, $queryimagenDest);
    $imgDest = mysqli_fetch_assoc($rtsimagenDest);
    $idimgDest = $imgDest['idImagen'];
    $tpimgDest = $imgDest['tipoImagen'];
    $nomimgDest = "gestion/assets/images/inmuebles/" . str_pad($idimgDest, 8, "0", STR_PAD_LEFT) . "." . $tpimgDest;

    if (!file_exists($nomimgDest)) {
        $nomimgDest = "gestion/assets/images/inmuebles/00000000.png";
    }
    if ($inmueblesdest['habitacionesInmueble'] > 0) {
        $habitacionesInmuebleDest = $inmueblesdest['habitacionesInmueble'] . "<sup>+</sup>";
    } else {
        $habitacionesInmuebleDest = "-";
    };
    if ($inmueblesdest['banosInmueble'] > 0) {
        $banosInmuebleDest = $inmueblesdest['banosInmueble'];
    } else {
        $banosInmuebleDest = "&nbsp;-&nbsp;";
    };
    if ($inmueblesdest['superficieCubiertaInmueble'] > 0) {
        $superficieCubiertaInmuebleDest = $inmueblesdest['superficieCubiertaInmueble'];
    } else {
        $superficieCubiertaInmuebleDest = "-";
    };
    if ($inmueblesdest['valorInmueble'] > 0) {
        $valorInmuebleDest = $inmueblesdest['monedaInmueble'] . "</b>&nbsp;" . $inmueblesdest['valorInmueble'];
    } else {
        $valorInmuebleDest = "Consultar";
    };
    $domicilio = "";
    if (!empty($inmueblesdest['domicilioNumeroInmueble'])) {
        $domicilio .= " " . $inmueblesdest['domicilioNumeroInmueble'];
    }
    if (!empty($inmueblesdest['domicilioOrientacionInmueble'])) {
        $domicilio .= " " . $inmueblesdest['domicilioOrientacionInmueble'];
    }
    if (!empty($inmueblesdest['nombreLocalidad'])) {
        $domicilio .= "<br>&nbsp;<b>" . $inmueblesdest['nombreLocalidad'] . "</b>";
    }

    $nombreLocalidad = $inmueblesdest['nombreLocalidad'];
    $nombreOperacion = $inmueblesdest['nombreOperacion'];

    $destacado .= "<li>";
    $destacado .= "<div class='col-md-3 col-sm-3 col-xs-3 blg-thumb p0'>";
    $destacado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmueblesdest['idInmueble'] . "&operacion=" . $inmueblesdest['idOperacion'] . "&propiedad=" . $inmueblesdest['idPropiedad'] . "'><img src='" . $nomimgDest . "'></a>";
    $destacado .= "<span class='property-seeker'>";
    $destacado .= "<b class='b-1'>" . $nombreOperacion . "</b>";
    $destacado .= "<!--<b class='b-2'>S</b> -->";
    $destacado .= "</span>";
    $destacado .= "</div>";
    $destacado .= "<div class='col-md-8 col-sm-8 col-xs-8 blg-entry'>";
    $destacado .= "<h6> <a href='detalle-inmueble.php?idInmueble=" . $inmueblesdest['idInmueble'] . "&operacion=" . $inmueblesdest['idOperacion'] . "&propiedad=" . $inmueblesdest['idPropiedad'] . "'>" . $inmueblesdest['nombrePropiedad'] . "</a></h6>";
    $destacado .= "<span class='property-price'>" . $valorInmuebleDest . "</span>";
    $destacado .= "</div>";
    $destacado .= "</li>";
}
$destacado .= "</ul>";
