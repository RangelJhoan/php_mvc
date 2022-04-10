<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->alumnos = [];
    }

    function render(){
        $alumnos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
    }

    function verAlumno($param = null){
        $idUsuario = $param[0];
        $alumno = $this->model->getById($idUsuario);

        session_start();
        $_SESSION['idAlumno'] = $alumno->id;
        $_SESSION['id_verAlumno'] = $alumno->numeroDocumento;
        $this->view->alumno = $alumno;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
    }

    function actualizarAlumno(){
        session_start();
        $id = $_SESSION['idAlumno'];
        $numeroDocumento = $_SESSION['id_verAlumno'];
        $nombre = $_POST['nombre'];
        unset($_SESSION['id_verAlumno']);
        unset($_SESSION['idAlumno']);

        if($this->model->update(['id' => $id, 'numeroDocumento' => $numeroDocumento, 'nombre' => $nombre])){
            $alumno = new Usuario();
            $alumno->numeroDocumento = $numeroDocumento;
            $alumno->nombre = $nombre;
            $this->view->alumno = $alumno;
            $this->view->mensaje = "Usuario actualizado correctamente";
        }else{
            $this->view->mensaje = "Error al actualizar el usuario";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarAlumno($param = null){
        $id = $param[0];
        if($this->model->delete($id)){
            //$this->view->mensaje = "Usuario eliminado correctamente";
            $mensaje = "Usuario eliminado correctamente";
        }else{
            //$this->view->mensaje = "Error al eliminar el usuario";
            $mensaje = "Error al eliminar el usuario";
        }

        echo $mensaje;
    }

}

?>