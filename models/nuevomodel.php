<?php

class NuevoModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        //Insertar datos en la BD
        try {
            $query = $this->db->connect()->prepare('INSERT INTO usuario (numero_documento, nombre, id_tipousuario) VALUES (:numeroDocumento, :nombre, 1)');
            $query->execute(['numeroocumento' => $datos['numeroDocumento'], 'nombre' => $datos['nombre']]);
            return true;
        } catch (PDOException $e) {
            echo "<script>console.log(\"{$e->getMessage()}\");</script>";
            return false;
        }
    }

}
