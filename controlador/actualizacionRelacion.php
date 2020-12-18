<?php
    if(isset($_REQUEST['relacionSE'])){
        require_once("../modelo/sintomaEnfermedad.php");
        $sintomaEnfermedad = new SintomaEnfermedad();
        $respuesta = $sintomaEnfermedad->obtnerActualizacionesSE($_REQUEST['relacionSE']);
        echo $respuesta;
    }else{
        "No se esta pasando los valores";
    }
