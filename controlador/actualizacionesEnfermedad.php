<?php
    header("Content-Type: application/json");
    require_once("../modelo/model_triggersEnfermedad.php");
    $triggersEnfermedad = new TriggersEnfermedad();
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            $_POST = json_decode(file_get_contents('php://input'),true);
            $res = $triggersEnfermedad->obtnerActualizacionesEnfermedad($_POST['fecha_enfermedad']);
            echo $res;
            break;
        default:
            $res = json_encode(array('Error'=>"No se pudo mostrar"));
            echo $res;
            break;
    }


    // if(isset($_REQUEST['enfermedad'])){
    //     require_once("../modelo/model_triggersEnfermedad.php");
    //     $triggersEnfermedad = new TriggersEnfermedad();
    //     $respuesta = $triggersEnfermedad ->obtnerActualizacionesEnfermedad($_REQUEST['enfermedad']);
    //     echo $respuesta;
    // }else{
    //     "No se esta pasando los valores";
    // }

