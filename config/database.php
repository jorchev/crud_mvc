<?php

    class Conectar{

        public static function conexion(){
            $conexion = new mysqli("localhost","root","","crud_mvc");
            return $conexion;
        }

    }

?>