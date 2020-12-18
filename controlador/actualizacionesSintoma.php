<?php
    header("Content-Type: application/json");
    require_once("../modelo/model_triggersSintoma.php");
    $triggersSintoma = new TriggersSintoma();
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            $res = $triggersSintoma->obtnerActualizacionesSintoma($_POST['fecha_sintoma']);
            echo $res;
            $triggersSintoma->cerrarConexion();
            break;
        default:
            $res = json_encode(array('Error'=>"No se pudo mostrar"));
            echo $res;
            break;
    }