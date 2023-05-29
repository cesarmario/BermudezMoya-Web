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

//$listado = "<div class='row mb-5'>";
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
        $habitacionesInmueble = $inmuebles['habitacionesInmueble'] . "<sup>+</sup>";
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
    if (!empty($inmuebles['domicilioNumeroInmueble'])) {
        $domicilio .= " " . $inmuebles['domicilioNumeroInmueble'];
    }
    if (!empty($inmuebles['domicilioOrientacionInmueble'])) {
        $domicilio .= " " . $inmuebles['domicilioOrientacionInmueble'];
    }
    if (!empty($inmuebles['nombreLocalidad'])) {
        $domicilio .= "<br>&nbsp;<b>" . $inmuebles['nombreLocalidad'] . "</b>";
    }

    $nombreOperacion = $inmuebles['nombreOperacion'];
    $nombreLocalidad = $inmuebles['nombreLocalidad'];


    $listado .= "<div class='col-sm-6 col-md-3 p0'>";
    $listado .= "<div class='box-two proerty-item'>";
    $listado .= "<div class='item-thumb'>";
    $listado .= "<a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "'><img src='" . $nomimg . "'></a>";
    $listado .= "</div>";
    $listado .= "<div class='item-entry overflow'>";
    $listado .= "<h5><a href='detalle-inmueble.php?idInmueble=" . $inmuebles['idInmueble'] . "&operacion=" . $inmuebles['idOperacion'] . "&propiedad=" . $inmuebles['idPropiedad'] . "'>" .  $inmuebles['tituloInmueble'] . "</a></h5>";
    $listado .= "<div class='dot-hr'>" . $nombreLocalidad . "</div>";
    $listado .= "<span class='pull-left'><b>" . $nombreOperacion . "</b></span>";
    $listado .= "<span class='proerty-price pull-right'>" . $valorInmueble . "</span>";
    $listado .= "</div>";
    $listado .= "</div>";
    $listado .= "</div>";
}
//$listado .= "</div>";
