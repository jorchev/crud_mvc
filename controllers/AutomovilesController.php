<?php
session_start();

class AutomovilesController{

    public function __construct(){

        if(!isset($_SESSION['id'])){
            die("Primero <a href=\"index.php\">inicia sesion</a> para acceder a esta sección");
        }
        require_once "models/AutomovilesModel.php";

    }

    public function listado(){

        $automoviles = new AutomovilesModel();
        $data['titulo'] = 'Automoviles';
        $data['automoviles'] = $automoviles->getAutomoviles();

        require_once "views/automoviles.view.php";

    }

    public function nuevo(){

        $data['titulo'] = "Agregar un Automovil";
        require_once "views/nuevo.view.php";

    }

    public function guardar(){

        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $anio = $_POST['anio'];
        $color = $_POST['color'];

        $automoviles = new AutomovilesModel();
        $automoviles->insertar($placa, $marca, $modelo, $anio, $color);

        $this->listado();

    }

    public function modificar($id){

        $automovil = new AutomovilesModel();

        $data['id'] = $id;
        $data['titulo'] = "Modificar automovil";
        $data['automovil'] = $automovil->getAutomovil($id);

        require_once "views/modificar.view.php";

    }

    public function actualizar(){

        $id = $_POST['id'];
        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $anio = $_POST['anio'];
        $color = $_POST['color'];
        
        $automovil = new AutomovilesModel();
        $automovil->actualizar($id, $placa, $marca, $modelo, $anio, $color);

        $this->listado();

    }

    public function eliminar($id){

        $automovil = new AutomovilesModel();
        $automovil->eliminar($id);

        $this->listado();

    }

}

?>