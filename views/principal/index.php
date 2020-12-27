<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/principal.css">
</head>
<body>
    <center>
    <div>
        <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta1="uploads/super.png";
        ?>
        <img  src="<?php echo $ruta1; ?>">
    
    </div>
    </center>
    
  <center>
 
        <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta2="uploads/registrarse.png";
        ?>
        <a href="<?php echo constant('URL'); ?>registrate"><img  src="<?php echo $ruta2; ?>">
    
    
    <a href="<?php echo constant('URL'); ?>registrate"> <img scr="<?php echo constant('URL'); ?>uploads/registrarse.png" > </a>
  
        <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta3="uploads/Iniciar.png";
        ?>
        <a href="<?php echo constant('URL'); ?>iniciarsesion"><img  src="<?php echo $ruta3; ?>">
    
    
    <a href="<?php echo constant('URL'); ?>iniciarsesion"> <img scr="<?php echo constant('URL'); ?>uploads/Iniciar.png" > </a>
    
  </center>
   

</body>
</html>