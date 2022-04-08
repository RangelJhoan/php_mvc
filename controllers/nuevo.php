<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
    }

    function registrarAlumno(){
        $numeroDocumento    = $_POST['numeroDocumento'];
        $nombre             = $_POST['nombre'];

        if($this->model->insert(['numeroDocumento' => $numeroDocumento, 'nombre' => $nombre])){
            echo "Alumno creado";
        }else{
            echo "Error al crear el alumno";
        }
       
    }

}

?>