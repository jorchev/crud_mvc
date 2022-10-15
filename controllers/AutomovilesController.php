<?php

class AutomovilesController{

    public function __construct(){

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

}

?>