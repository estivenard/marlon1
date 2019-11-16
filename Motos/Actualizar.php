      <html> 
      <head>
         <title>Actualizar</title>
      </head> 
 
      <body>



      <?php
      
     $id = $_GET['id'];
     require_once "conexion.php";
     $query="SELECT * FROM empleados WHERE id = ' $id'";
     $result=$mysqli->query($query);
      $followingdata = $result->fetch_assoc();
      echo '<form action="ActualizarDatos.php" method="post">';
      echo '<td><input type="hidden" name="id" value="' .$followingdata['id']. '"></td><br/>';
       echo '<td><input type="text" name="nombre" value="' .$followingdata['nombre']. '"></td><br/>';
       echo '<td><input type="text" name="apellido" value="' .$followingdata['apellido']. '"></td><br/>';
       echo '<td><input type="text" name="email" value="' .$followingdata['email']. '"></td><br/>';
       echo '<button type="submit" value="registrar" class="btn btn-secondary btn-xm">Actualizar</button>';
       echo '</form>';
                ?>
 
      </body> 
      </html>
