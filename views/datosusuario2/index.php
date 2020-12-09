<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/insertardatos2.css">
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
        <input type="nombre" name="nombre" autocomplete="off" placeholder="Telefono" > 
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="A_p" name="email" autocomplete="off" placeholder="Direcciòn" >  
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Codigo Postal" > 
       </p> <p>.</p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Ciudad" >
       </p> <p>.</p>
     
</from>
       
    <footer> 
   
        <a href="<?php echo constant('URL'); ?>corroborardatos"> <p >Registrarse</p> </a>
    </footer>
           </center>
</form>
    </div>
  
<?php require 'views/footer.php'; ?>    
</body>
</html>