<?php
session_start();

class UsuariosController{

    public function __construct(){

        require_once "models/UsuariosModel.php";

    }

    public function mostrarLogin(){

        //$usuario = new UsuariosModel();
        $data['titulo'] = 'Iniciar sesión';
        require_once "views/login.view.php";

    }

    public function iniciarSesion(){
        $nombreUsuario = $_POST['usuario'];
        $password = md5($_POST['password']);

        $usuario = new UsuariosModel();
        $data['usuario'] = $usuario->buscarUsuario($nombreUsuario,$password);
        
        if($data['usuario']['id'] != null){
            $_SESSION['id'] = $data['usuario']['id'];
            $_SESSION['usuario'] = $data['usuario']['usuario'];
            $_SESSION['nombre'] = $data['usuario']['nombre'];

            require_once "controllers/AutomovilesController.php";
            $automoviles = new AutomovilesController();
            $automoviles->listado();

        }else{
            echo "Usuario y/o contraseña incorrectos, <a href=\"index.php\">regresar a inicio de sesión</a>";
        }
        

    }

    public function cerrarSesion(){
        session_destroy();
        header("location: index.php");
    }

}