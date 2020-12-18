<?php
    require_once("conexion.php");
    class SintomaEnfermedad extends Conexion{
        public function SintomaEnfermedad(){
            parent::__construct();
        }
        public function cerrarConexion(){
            $this->connexion_bd=null;
        }

        public function obtnerActualizacionesSE($fecha){
            $sql = "SELECT * FROM triggersSE WHERE fecha_SE > :fecha"; 
            $sentenceSQL = $this->connexion_bd->prepare($sql);
            $sentenceSQL->execute(array(":fecha"=>$fecha));
            $respuesta = $sentenceSQL->fetchAll(PDO::FETCH_ASSOC);
            $sentenceSQL->closeCursor();
            //$res = json_encode($respuesta);
            return json_encode(array('data' => $respuesta), JSON_PRETTY_PRINT);
            //return $res;
        }

    }