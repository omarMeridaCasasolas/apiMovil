<?php
    header("Content-Type: application/json");
    require_once("../modelo/model_sintomaEnfermedad.php");
    $sintomaEnfermedad = new SintomaEnfermedad();
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            $res = $sintomaEnfermedad->obtnerActualizacionesSE($fecha)($_POST['relacionSE']);
            $sintomaEnfermedad->cerrarConexion();
            echo $res;
            break;
        default:
            $res = json_encode(array('Error'=>"No se pudo mostrar"));
            echo $res;
            break;
    }

    // if(isset($_REQUEST['relacionSE'])){
    //     require_once("../modelo/sintomaEnfermedad.php");
    //     $sintomaEnfermedad = new SintomaEnfermedad();
    //     $respuesta = $sintomaEnfermedad->obtnerActualizacionesSE($_REQUEST['relacionSE']);
    //     echo $respuesta;
    // }else{
    //     "No se esta pasando los valores";
    // }
