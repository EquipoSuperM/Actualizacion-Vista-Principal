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
            <p>
            <td><img scr= "<?php echo "C:\xampp\htdocs\ProyecSuperM\uploads/super.png"; ?>" width="100px" height="100px"></td>
            </p>

       <header>
      
              <a  href="<?php echo constant('URL'); ?>datosusuario"> <b style="font-family:Segoe UI Emoji">REGISTRATE CON TUS DATOS</b> </a> 
       
       </header> 
       <p style="font-family:Segoe UI Emoji" > ------------ ¿YA TIENES UNA CUENTA? ------------- </p>
       <nav>
      
            <a href="C:/Users/HP/Documents/SuperM/InisiarSesion.html" >   <p style="font-family:Segoe UI Emoji"> INICIAR SESIÓN</p> </a>
           
       </nav>
       <p style="font-family:Segoe UI Emoji">-------------- O REGISTRATE CON ---------------- </p>
       <p> </p>

       <a  href="https://facebook.com" target="iframe" >  <img src="C:\Users\HP\Documents\SuperM\imagenes/facebook.jpg" style="width:80px;height:35px; border:0;"> </a>
       <p>

       </p>
       <a href="https://google.com/" target="iframe"></a> <img src="C:\Users\HP\Documents\SuperM\imagenes/google.jpg" style="width:80px;height:35spx; border:0;"> </a>
 
        <footer> 
           <a href="<?php echo constant('URL'); ?>principal"> <p >Cancelar</p> </a>
        </footer>

           </center>
</form>
</div>

<?php require 'views/footer.php'; ?>
</body>
</html>