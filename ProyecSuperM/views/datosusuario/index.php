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
        
    <form>
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
        <input type="nombre" name="nombre" autocomplete="off" placeholder="Nombre" > 
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="A_p" name="email" autocomplete="off" placeholder="Apellido Paterno" >  
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Apellido Materno" > 
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Correo" >
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Contraseña" > 
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Verificar Contraseña" > 
       </p>
</from>
       
    <footer> 
    <a href="<?php echo constant('URL'); ?>datosusuario2"> <p >Siguiente</p> </a>
    </footer>
           </center>
</form>
    </div>
  
<?php require 'views/footer.php'; ?>    
</body>
</html>