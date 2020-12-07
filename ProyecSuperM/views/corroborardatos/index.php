<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div  id="main"><br>
      
        <div id="respuesta" class="center"></div> <br>
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
       <p  style="font-family:Segoe UI Emoji">¿ Los Datos Son Correctos Para Guardar?</p>  
  </nav>

  ___________ ° ___________
  <p>
.
  </p>
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Nombre" > </div> 
  
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Apellido Paterno" > </div> 
     
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Apellido Materno" > </div> 
  
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Correo" > </div> 
   
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Numero Telefonico" > </div> 
    
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Direccion" > </div> 
    
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Codigo Postal" > </div> 
       
       <p style="font-family:Segoe UI Emoji" >
        <input type="email" name="email" autocomplete="off" placeholder="Ciudad" > </div> 
       

       
    <footer> 
        <a href="C:/Users/HP/Documents/SuperM/InisiarSesion.html"> <p >Aceptar </p> </a>
    </footer>
    <aside> 
        <a href="C:/Users/HP/Documents/SuperM/Login.html"> <p >Cancelar </p> </a>
       </aside>

           </center>
</form>
   
        
            <thead > 
                <tr >
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Fotografia</th>
                    <th>OPCIONES</th> 
                </tr>
            </thead>
    
            <tbody id="tbody-alumnos">
                <?php 
                include_once 'models/alumno.php';
                foreach($this->alumnos as $row){
                    $alumno = new Alumno();
                    $alumno = $row;
                 ?>

                <tr id="fila-<?php echo $alumno->matricula; ?>">
                    <td><?php echo $alumno->matricula; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                    <td><?php echo $alumno->materno; ?></td>
                    <td><?php echo $alumno->telefono; ?></td>
                    <td><?php echo $alumno->email; ?></td>
                    <td><img scr= "<?php echo URL.$alumno->archivo; ?>" width="100px" height="100px"></td>
            
              
                   

                    <td><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Editar</a></td>
                 <!---   <td><a href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->matricula; ?>">Eliminar</a></td> --->
                   <td><button class="bEliminar" data-matricula="<?php echo $alumno->matricula; ?>"> Eliminar</button></td>
                </tr>

                <?php  } ?>
            </tbody>
     
    </div>

        <script src="<?php echo constant('URL');?>public/js/main.js"></script>

    <?php require 'views/footer.php'; ?>
</body>
</html>