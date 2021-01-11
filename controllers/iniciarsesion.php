<?php

class iniciarsesion extends Controller{

    function __construct(){
        parent::__construct();
     
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('iniciarsesion/index');
    }
    function iniciarUsuario(){
        $email = $_POST['email'];
        $password = $_POST['password'];
      

        $mensaje ="";

        if($this->model->insert(['email' =>$email,'password' =>$password])){
            $mensaje = "Entrar";
        }else{
            $mensaje = "El email o la contraseña son incorrectos";
        }
          
        $this->view->mensaje = $mensaje;
        $this->render();
    }
}


?>