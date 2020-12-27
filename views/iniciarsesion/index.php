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
      
    <form>
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
        <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta4="uploads/sobre.svg";
        ?>
        <img style="width:20px;height:20px;" src="<?php echo $ruta4; ?>">
    
       <p>.
       </p>
       <p style="font-family:Segoe UI Emoji">
        <input form="password" type="password" name="password" minlength="6" autocomplete="off"  placeholder="contraseña" required>
        <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta5="uploads/login.svg";
        ?>
        <img style="width:20px;height:20px;" src="<?php echo $ruta5; ?>">
    
       
       <nav>
    
      <a type="submit" href="<?php echo constant('URL'); ?>main"  > <p  style="font-family:Segoe UI Emoji">INICIAR SESIÓN</p> </a> 
       </nav>
       <p style="font-family:Segoe UI Emoji">----------------- O conéctate con ------------------- </p>

       <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta2="uploads/facebook.jpg";
        ?>
        <a  href="https://facebook.com" target="iframe"><img style="width:80px;height:35px;" src="<?php echo $ruta2; ?>">

     
       <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta3="uploads/google.jpg";
        ?>
        <a  href="https://google.com" target="iframe"><img style="width:80px;height:40px;" src="<?php echo $ruta3; ?>">
    
    <p>_______________________________________________</p>
    </form>
    <footer> 
        <a href="C:/Users/HP/Documents/SuperM/Principal.html"> <p >Cancelar</p> </a>
    </footer>

</form>
    </div>
</center>

    <?php require 'views/footer.php'; ?>
</body>
</html>