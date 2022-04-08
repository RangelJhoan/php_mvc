<?php

include_once 'models/usuario.php';

class ConsultaModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM usuario");

            while($row = $query->fetch()){
                $item = new Usuario();
                $item->id = $row['id'];
                $item->numeroDocumento = $row['numero_documento'];
                $item->nombre = $row['nombre'];

                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            return [];
        }

    }

}
