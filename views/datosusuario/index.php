<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/insertardatos.css">
    <title>Document</title>
</head>
<body>

<?php require 'views/header.php'; ?>
    <div id="main">  
    <center>
    <div class= "center"><?php echo $this->mensaje;?></div>
    <form action="<?php echo constant('URL'); ?>/datosusuario/registrarUsuario" method="POST">
        <center>
       <header>
        <center> 
            <h2>SúperM<span class="note">.com</span>
            </h2>  
                   </center>
       </header> 
       <p>
       </p>
       
       <nav>
       <p  style="font-family:Segoe UI Emoji">REGISTRATE CON TUS DATOS</p>  
     </nav>
  ___________ ° ___________
  <p>.</p>

       <p style="font-family:Segoe UI Emoji" >
       <lavel form="nombreusuario"></lavel>
        <input   type="text" name="nombreusuario" id=""  placeholder="Nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required/> 
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
       <lavel form="a_p"></lavel>
        <input  type="text" name="a_p" id=""  placeholder="Apellido Paterno" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required/>  
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
       <lavel form="a_m"></lavel>
        <input  type="text" name="a_m" id="" placeholder="Apellido Materno" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required/> 
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
       <lavel form="correo"></lavel>
        <input  type="email" name="correo" id=""  placeholder="Correo"  requiered/>
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
       <lavel form="contraseña"></lavel>
        <input type="password" name="contraseña" id="pass1"  placeholder="Contraseña" requiered/> 
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
       <lavel form="vcontraseña"></lavel>
        <input  type="password" name="vcontraseña" id="pass2"  placeholder="Verificar Contraseña" requiered/> 
       </p>

       
 <button> 
    <a href="<?php echo constant('URL'); ?>datosusuario2"  type="submit" id="submit" value="Registrar Usuario"> <p >Siguiente</p> </a>
    </button> 
  <!--  <input type="submit" name="submit" id="submit" value="Registrar Usuario">
           </center> -->
          
    </div> 

    </form>
<?php require 'views/footer.php'; ?>    
</body>
</html>