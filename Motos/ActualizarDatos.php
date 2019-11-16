<?php
      require_once "conexion.php";
          $id=$_POST['id'];
          $nombre=$_POST['nombre'];
          $apellido=$_POST['apellido'];
          $email=$_POST['email'];
     
           $query="UPDATE empleados
           SET nombre = '$nombre',
           apellido = '$apellido',
           email = '$email',
           WHERE id = '$id'";


        $pruebas ="UPDATE empleados set nombre='$nombre',apellido='$apellido',email='$email'where id='$id'";
        print "<script>alert(\"Registro exitoso.\");window.location='Empleados.php';</script>";
        $que = $mysqli->query($pruebas)
        
       

?>