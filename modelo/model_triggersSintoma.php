<?php
    require_once("conexion.php");
    class TriggersSintoma extends Conexion{
        public function TriggersSintoma(){
            parent::__construct();
        }
        public function cerrarConexion(){
            $this->connexion_bd=null;
        }

        public function obtnerActualizacionesSintoma($fecha){
            $sql = "SELECT * FROM triggers_Sintoma WHERE fecha_sintoma > :fecha";
            $sentenceSQL = $this->connexion_bd->prepare($sql);
            $sentenceSQL->execute(array(":fecha"=>$fecha));
            $respuesta = $sentenceSQL->fetchAll(PDO::FETCH_ASSOC);
            $sentenceSQL->closeCursor();
            //$res = json_encode($respuesta);
            return json_encode(array('data' => $respuesta), JSON_PRETTY_PRINT);
            //return $res;
        }

    }