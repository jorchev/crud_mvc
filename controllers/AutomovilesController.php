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

}

?>