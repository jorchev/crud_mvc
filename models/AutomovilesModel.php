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

    public function insertar($placa, $marca, $modelo, $anio, $color){

        $stmt = $this->db->prepare("INSERT INTO automoviles (placa, marca, modelo, anio, color) VALUES(?,?,?,?,?)");
        $stmt->bind_param('sssds',$placa, $marca, $modelo, $anio, $color);
        $stmt->execute();
        
    }

    public function getAutomovil($id){

        $stmt = $this->db->prepare("SELECT * FROM automoviles WHERE id = ? LIMIT 1");
        $stmt->bind_param('d',$id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        $row = $resultado->fetch_assoc();

        return $row;

    }

    public function actualizar($id, $placa, $marca, $modelo, $anio, $color){

        $stmt = $this->db->prepare("UPDATE automoviles SET placa = ?, marca = ?, modelo = ?, anio = ?, color = ? WHERE id = ?");
        $stmt->bind_param('sssdsd', $placa, $marca, $modelo, $anio, $color, $id);
        $stmt->execute();

    }

    public function eliminar($id){

        $stmt = $this->db->prepare("DELETE FROM automoviles WHERE id = ? LIMIT 1");
        $stmt->bind_param('d',$id);
        $stmt->execute();

    }

}

?>