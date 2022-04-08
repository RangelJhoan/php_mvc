<?php

class Ayuda extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Estás en la sección de ayuda";
    }

    function render(){
        $this->view->render('ayuda/index');
    }

}

?>