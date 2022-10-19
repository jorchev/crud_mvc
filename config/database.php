<?php

    class Conectar{

        public static function conexion(){
            $conexion = new mysqli("localhost","root","Jam90203","crud_mvc");
            return $conexion;
        }

    }

?>