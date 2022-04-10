<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->usuarios = [];
    }

    function render(){
        $usuarios = $this->model->get();
        $this->view->usuarios = $usuarios;
        $this->view->render('consulta/index');
    }

    function verUsuario($param = null){
        $idUsuario = $param[0];
        $usuario = $this->model->getById($idUsuario);

        session_start();
        $_SESSION['idUsuario'] = $usuario->id;
        $_SESSION['id_verUsuario'] = $usuario->numeroDocumento;
        $this->view->usuario = $usuario;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
    }

    function actualizarUsuario(){
        session_start();
        $id = $_SESSION['idUsuario'];
        $numeroDocumento = $_SESSION['id_verUsuario'];
        $nombre = $_POST['nombre'];
        unset($_SESSION['id_verUsuario']);
        unset($_SESSION['idUsuario']);

        if($this->model->update(['id' => $id, 'numeroDocumento' => $numeroDocumento, 'nombre' => $nombre])){
            $usuario = new Usuario();
            $usuario->numeroDocumento = $numeroDocumento;
            $usuario->nombre = $nombre;
            $this->view->usuario = $usuario;
            $this->view->mensaje = "Usuario actualizado correctamente";
        }else{
            $this->view->mensaje = "Error al actualizar el usuario";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarUsuario($param = null){
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