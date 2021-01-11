<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje ="";

        //echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    
}

?>