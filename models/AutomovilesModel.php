<?php

class AutomovilesModel{

    private $db;
    private $automoviles;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->automoviles = array();

    }

    public function getAutomoviles(){

        $resultado = $this->db->query("SELECT * FROM automoviles");
        while($row = $resultado->fetch_assoc()){

            $this->automoviles[] = $row;

        }

        return $this->automoviles;

    }

}

?>