<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/Diseño.css">
    <title>Document</title>
</head>
<body>
   
    <?php require 'views/header.php'; ?>
    
    
<div id="main">
<form>
    
        <center>
      
        <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta="uploads/super.png";
        ?>
        <img style="width:120px;height:120px;" src="<?php echo $ruta; ?>">
    
       <header>
      
              <a  href="<?php echo constant('URL'); ?>datosusuario"> <b style="font-family:Segoe UI Emoji">REGISTRATE CON TUS DATOS</b> </a> 
       
       </header> 
       <p style="font-family:Segoe UI Emoji" > ------------ ¿YA TIENES UNA CUENTA? ------------- </p>
       <nav>
      
            <a href="C:/Users/HP/Documents/SuperM/InisiarSesion.html" >   <p style="font-family:Segoe UI Emoji"> INICIAR SESIÓN</p> </a>
           
       </nav>
       <p style="font-family:Segoe UI Emoji">-------------- O REGISTRATE CON ---------------- </p>
       <p> </p>

       <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta2="uploads/facebook.jpg";
        ?>
        <a  href="https://facebook.com" target="iframe"><img style="width:80px;height:35px;" src="<?php echo $ruta2; ?>">

       <p>
       </p>
       
       <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta3="uploads/google.jpg";
        ?>
        <a  href="https://google.com" target="iframe"><img style="width:80px;height:40px;" src="<?php echo $ruta3; ?>">
    
        <footer> 
           <a href="<?php echo constant('URL'); ?>principal"> <p >Cancelar</p> </a>
        </footer>

           </center>
</form>
</div>

<?php require 'views/footer.php'; ?>
</body>
</html>