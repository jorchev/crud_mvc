<?php

    function cargarControlador($controlador){

        $archivoControlador = "controllers/".ucwords($controlador)."Controller.php";
        $nombreControlador = ucwords($controlador)."Controller";
        
        // Validar que el archivo exista
        if(!is_file($archivoControlador)){
            $archivoControlador = "controllers".CONTROLADOR_PRINCIPAL."Controller.php";
        }
        
        require_once $archivoControlador;

        // Validar que la clase exista
        if(!class_exists($nombreControlador)){
            $nombreControlador = CONTROLADOR_PRINCIPAL."Controller";
        }
        
        $control = new $nombreControlador();

        return $control;

    }

    function cargarAccion($control, $accion, $id = null){

        if(isset($accion) && method_exists($control,$accion)){
            if($id == null){
                $control->$accion();
            }else{
                $control->$accion($id);
            }
        }else{
            $accion = ACCION_PRINCIPAL;
            $control->$accion();
        }

    }

?>