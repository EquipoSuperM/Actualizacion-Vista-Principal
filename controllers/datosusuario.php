<?php

class Datosusuario extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje ="";
     
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('datosusuario/index');
    }

    function registrarUsuario(){
        $nombreusuario = $_POST['nombreusuario'];
        $a_p           = $_POST['a_p'];
        $a_m           = $_POST['a_m'];
        $correo        = $_POST['correo'];
        $contraseña    = $_POST['contraseña'];
        $vcontraseña   = $_POST['vcontraseña'];

        $mensaje ="";

        if($this->model->insert(['nombreusuario' =>$nombreusuario,'a_p' =>$a_p, 'a_m' =>$a_m,
        'correo' =>$correo, 'contraseña'=>$contraseña, 'vcontraseña' =>$vcontraseña])){
            $mensaje = "Nuevo alumno creado";
        }else{
            $mensaje = "La matricula ya existe";
        }
          
        $this->view->mensaje = $mensaje;
        $this->render();
    }
    
  }


?>