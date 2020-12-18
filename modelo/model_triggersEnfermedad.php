<?php
    require_once("conexion.php");
    class TriggersEnfermedad extends Conexion{
        public function TriggersEnfermedad(){
            parent::__construct();
        }
        public function cerrarConexion(){
            $this->connexion_bd=null;
        }

        public function obtnerActualizacionesEnfermedad($fecha){
            $sql = "SELECT * FROM triggers_Enfermedad WHERE fecha_enfermedad > :fecha";
            $sentenceSQL = $this->connexion_bd->prepare($sql);
            $sentenceSQL->execute(array(":fecha"=>$fecha));
            $respuesta = $sentenceSQL->fetchAll(PDO::FETCH_ASSOC);
            $sentenceSQL->closeCursor();
            //$res = json_encode($respuesta);
            return json_encode(array('data' => $respuesta), JSON_PRETTY_PRINT);
            //return $res;
        }

    }