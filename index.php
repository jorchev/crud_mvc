<?php
    session_start();
    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/database.php";

        if(isset($_GET['c'])){

            $controlador = cargarControlador($_GET['c']);

            if(isset($_GET['a'])){

                if(isset($_GET['id'])){
                    cargarAccion($controlador,$_GET['a'],$_GET['id']);
                }else{
                    cargarAccion($controlador,$_GET['a']);
                }

            }else{
                cargarAccion($controlador, ACCION_PRINCIPAL);
            }

        }else{
            if(isset($_SESSION['id'])){
                $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
                cargarAccion($controlador,ACCION_PRINCIPAL);
            }else{
                $controlador = cargarControlador("Usuarios");
                cargarAccion($controlador,"mostrarLogin");
            }
        }

?>