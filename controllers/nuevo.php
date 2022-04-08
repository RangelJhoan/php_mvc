<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function registrarAlumno(){
        $numeroDocumento    = $_POST['numeroDocumento'];
        $nombre             = $_POST['nombre'];

        $mensaje = "";

        if($this->model->insert(['numeroDocumento' => $numeroDocumento, 'nombre' => $nombre])){
            $mensaje = "Nuevo alumno creado";
        }else{
            $mensaje = "Error al crear al alumno";
        }
       
        $this->view->mensaje = $mensaje;
        $this->render();
    }

}

?>