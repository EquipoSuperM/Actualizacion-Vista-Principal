<?php
class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){

        try{
            $query = $this->db->connect()->prepare('INSERT INTO USUARIOS (NOMBREUSUARIO, A_P, A_M,
            CORREO, CONTRASEÑA, VCONTRASEÑA) VALUES(:nombreusuario, :a_p, :a_m, :correo,
            :contraseña, :vcontraseña)');
            $query->execute(['nombreusuario' =>$datos['nombre'], 'a_p' =>$datos['a_p'],'a_m' =>$datos['a_m'],
            'correo' =>$datos['correo'], 'contraseña' =>$datos['contraseña'], 'vcontraseña' =>$datos['vcontraseña']]);
           return true;
       
        }catch(PDOException $e){
          /*  echo $e->getMessage();*/
            //echo "Ya esxiste esa matricula";
            return false;
             
        }
        
    }

}


?>