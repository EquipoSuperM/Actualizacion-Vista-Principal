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
    <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta="uploads/anuncio.jpg";
        ?>
        <img style="width:1365px;height:400px;" src="<?php echo $ruta; ?>">
 
   

    <?php require 'views/footer.php'; ?>
</body>
</html>