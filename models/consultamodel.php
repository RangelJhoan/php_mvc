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

    public function getById($id){
        $usuario = new Usuario();
        try {
            $query = $this->db->connect()->prepare("SELECT * FROM usuario WHERE id = :id");
            $query->execute(['id' => $id]);
            while($row = $query->fetch()){
                $usuario->id = $row['id'];
                $usuario->numeroDocumento = $row['numero_documento'];
                $usuario->nombre = $row['nombre'];
            }
            return $usuario;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($item){
        
        try{
            $query = $this->db->connect()->prepare("UPDATE usuario SET nombre = :nombre WHERE id = :id");
            $query->execute([
                'nombre' => $item['nombre'],
                'id' => $item['id']
            ]);
            return true;

        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        
        try{
            $query = $this->db->connect()->prepare("DELETE FROM usuario WHERE id = :id");
            $query->execute(['id' => $id]);
            return true;

        }catch(PDOException $e){
            return false;
        }
    }

}
