<?php

class Conexion{

    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'prueba_crud');
    }

    public function getUsers(){
        $query = $this->con->query("SELECT * FROM usuario");
        $retorno = [];

        $i=0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;
    }

}

?>