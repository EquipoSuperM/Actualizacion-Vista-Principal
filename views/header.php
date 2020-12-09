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
     <h1>SuperM <span class="note">.com</span>
        <input type="search" id="miBusqueda" name="busqueda" style="font.size:50%" placeholder="Buscar Producto"><button> </button>
        </h1> 
        <h4><a href="<?php echo constant('URL'); ?>iniciarsesion">Iniciar Sesiòn</a></li>/<a href="<?php echo constant('URL'); ?>registrarte">Registrate</a> </h4>    

    </div>
   
    <div id="nav">
        <ul>

            <li><a href="<?php echo constant('URL'); ?>main">Logo</a></li>
            <li><a href="<?php echo constant('URL'); ?>nuevo">Productos</a></li>
            <li><a href="<?php echo constant('URL'); ?>consulta">Seguimiento de Pedidos</a></li>
            <li><a href="<?php echo constant('URL'); ?>ayuda">Super en tu Casa</a></li>
        </ul>
    </div>
 
   
</body>
</html>