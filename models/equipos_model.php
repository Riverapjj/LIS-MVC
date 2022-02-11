<?php

class Equipos {

    private $con;
    private $equipos;

    public function __construct() {
        $this->con = Conexion::conectar();
        $this->equipos = array();
    }

    public function getEquipos() {
        $consulta = $this->con->query("SELECT * FROM Equipos");
        
        while ($row = $consulta->fetch_assoc()) {
            $this->equipos[] = $row;
        }

        return $this->equipos;
    }

}

?>