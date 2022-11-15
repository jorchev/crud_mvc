<?php

class UsuariosModel{

    private $db;

    public function __construct(){
        $this->db = Conectar::conexion();
    }

    public function buscarUsuario($usuario, $password){

        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ? LIMIT 1");
        $stmt->bind_param('ss',$usuario, $password);
        $stmt->execute();

        $resultado = $stmt->get_result();
        $row = $resultado->fetch_assoc();

        return $row;

    }

}