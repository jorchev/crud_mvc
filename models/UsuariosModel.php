<?php

class UsuariosModel{

    private $db;

    public function __construct(){
        $this->db = Conectar::conexion();
    }

}