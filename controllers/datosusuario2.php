<?php

class datosusuario2 extends Controller{

    function __construct(){
        parent::__construct();
     
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('datosusuario2/index');
    }

    function registrarAlumno(){
        $matricula = $_POST['matricula'];
        $nombre    = $_POST['nombre'];
        $username  = $_POST['username'];
        $pass      = md5($_POST['pass']);
        $apellido  = $_POST['apellido'];
        $materno   = $_POST['materno'];
        $edad      = $_POST['edad'];
        $sexo      = $_POST['sexo'];
        $direccion = $_POST['direccion'];
        $ciudad    = $_POST['ciudad'];
        $telefono  = $_POST['telefono'];
        $codigo    = $_POST['codigo'];
        $email     = $_POST['email'];
        $directorio = "uploads/";
        $archivo = $directorio . basename($_FILES["archivo"]["name"]);
        $nemail="Yare";
        $mensaje ="";

        if($this->model->insert(['matricula' =>$matricula,'nombre' =>$nombre,'username' =>$username , 
        'pass'=>$pass, 'apellido' =>$apellido,'materno' =>$materno,
        'edad' =>$edad, 'sexo' =>$sexo, 'direccion'=>$direccion, 'ciudad'=>$ciudad, 'telefono'=>$telefono,
        'codigo'=>$codigo, 'email'=>$email, 'codigo'=>$codigo, 'archivo'=>$archivo])){
            $mensaje = "Nuevo Usuario Creado";
             
            $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    // valida que es imagen
    $checarSiImagen = getimagesize($_FILES["archivo"]["tmp_name"]);
    //var_dump($size);
    if($checarSiImagen != false){
        //validando tamaño del archivo
        $size = $_FILES["archivo"]["size"];
        if($size > 500000){
            echo "El archivo tiene que ser menor a 500kb";
        }else{
            //validar tipo de imagen
            if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg"){
                // se validó el archivo correctamente
                if(move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo)){
                    echo "El archivo se subió correctamente";
                }else{
                    echo "Hubo un error en la subida del archivo";
          }
            }else{
                echo "Solo se admiten archivos jpg/jpeg";
            }
        }
    }else{
        echo "El documento no es una imagen";
    }
        }else{
            $mensaje = "La matricula ya existe";
        }       
        $this->view->mensaje = $mensaje;
        $this->render();
    }
  }

?>