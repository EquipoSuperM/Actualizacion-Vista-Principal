<?php

class iniciarsesion extends Controller{

    function __construct(){
        parent::__construct();
     
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('iniciarsesion/index');
    }
}

?>