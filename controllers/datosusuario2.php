<?php

class datosusuario2 extends Controller{

    function __construct(){
        parent::__construct();
     
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('datosusuario2/index');
    }

    function registrarUsuarioParte2(){
        $telefono  = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $codigo    = $_POST['codigo'];
        $ciudad    = $_POST['ciudad'];
      
      

        if($this->model->insert(['nombre' =>$nombre,'a_p' =>$a_p,'a_m' =>$a_m , 
        'correo'=>$correo, 'contraseña' =>$contraseña,'vcontraseña' =>$vcontraseña,
        'telefono'=>$telefono,  'direccion'=>$direccion, 'codigo'=>$codigo,  'ciudad'=>$ciudad])){
            $mensaje = "Nuevo Usuario Creado";
                
        $this->view->mensaje = $mensaje;
        $this->render();
    }
  }
}

?>