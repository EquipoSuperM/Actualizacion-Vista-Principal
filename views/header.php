<!DOCTYPE html>
<html lang="en">
<head>
<style>
        span.note{
           font-size: 120%; 
           color: #F1042C;
        }
    </style>  
    <style type="text/css">
#imagen {
               background-image: url(file:///C:\Users\HP\Documents/imagen.jpg);
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title></title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/default.css">
   
</head>
<body>
    
    
<div id="header">  
     <h1>SuperM <span class="note">.com</span> </h1> 
     <center>  <input type="search" id="miBusqueda" name="busqueda" size="30" style="width:200px;height:25px;" placeholder="Buscar Producto"><button style="width:25px;height:25px;"> </button> 
</center>
        <h4><a href="<?php echo constant('URL'); ?>iniciarsesion">Iniciar Sesiòn</a></li>/<a href="<?php echo constant('URL'); ?>registrarte">Registrate</a> </h4>    
    </div>
   
    <div id="nav">
        <h4>Subtotal
            <p></p>
        <?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta8="uploads/carrito-de-compras.svg";
        ?>
        <img style="width:25px;height:25px;" src="<?php echo $ruta8;?>">
        <span class="price">$0.00</span>
        </h4>
     
        <ul> 
            <li><?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta6="uploads/menu.svg";
        ?>
        <img style="width:25px;height:25px;" src="<?php echo $ruta6;?>"><a href="<?php echo constant('URL'); ?>nuevo">Productos</a></li>
            <li><?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta7="uploads/aplicacion-de-seguimiento.svg";
        ?>
        <img style="width:25px;height:25px;" src="<?php echo $ruta7;?>"><a href="<?php echo constant('URL'); ?>consulta">Seguimiento de Pedidos</a></li>
            <li><?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta8="uploads/quedarse-en-casa.svg";
        ?>
        <img style="width:25px;height:25px;" src="<?php echo $ruta8;?>"><a href="<?php echo constant('URL'); ?>ayuda">Super en tu Casa</a></li>
            <li><?php
       //aquí coges de donde sea la ruta que quieres mostrar
       $ruta9="uploads/cupon.svg";
        ?>
        <img style="width:25px;height:25px;" src="<?php echo $ruta9;?>"> <a href="<?php echo constant('URL'); ?>main">Rebajas</a></li>
        </ul>
    </div>
  
 
    
   
</body>
</html>