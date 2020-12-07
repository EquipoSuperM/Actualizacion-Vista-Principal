<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/iniciarsesion.css">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center"></h1>
        <from action="<?php echo constant('URL'); ?>main/iniciarUsuario" method="POST">
        <center>
        
       <header>
        <center> 
            <h2>SúperM<span class="note">.com</span>
            </h2>  
            
                   </center>
       </header> 
       

       
       <h5> Iniciar Sesión</h5> 
       <p style="font-family:Segoe UI Emoji" >
        <input form="email" type="email" name="email" autocomplete="off" placeholder="correo" required>
         <img src="C:\Users\HP\Documents\SuperM\imagenes/sobre.svg" style="width:20px;height:20px; border:0;" >
        
       </p>
       
       <p style="font-family:Segoe UI Emoji">
        <input form="password" type="password" name="password" minlength="6" autocomplete="off"  placeholder="contraseña" required>
           <img src="C:\Users\HP\Documents\SuperM\imagenes/login.svg" style="width:20px;height:20px; border:0;" >
       </p>
       
       <nav>
      

             <a type="submit"  href="C:/Users/HP/Documents/SuperM/Practica%203.html"> <p  style="font-family:Segoe UI Emoji">INICIAR SESIÓN</p> </a> 
       </nav>
       <p style="font-family:Segoe UI Emoji">----------------- O conéctate con ------------------- </p>

       
       <a  href="https://facebook.com" target="iframe" >  <img src="C:\Users\HP\Documents\SuperM\imagenes/facebook.jpg" style="width:70px;height:2¿50px; border:0;"> </a>
        <a href="https://google.com/" target="iframe"></a> <img src="C:\Users\HP\Documents\SuperM\imagenes/google.jpg" style="width:70px;height:2¿50px; border:0;"> </a>
  
    ____________________________________
    <footer> 
        <a href="C:/Users/HP/Documents/SuperM/Principal.html"> <p >Cancelar</p> </a>
    </footer>

</form>
    </div>
</center>

    <?php require 'views/footer.php'; ?>
</body>
</html>