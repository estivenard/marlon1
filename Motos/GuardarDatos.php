<?php
	require_once "conexion.php";
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$clave=md5($_POST['clave']);

 /*$query="SELECT * FROM empleado WHERE email ='$email'";
     $result=$mysqli->query($query);
      $followingdata = $result->fetch_assoc();*/

   $query="INSERT INTO empleados(nombre,apellido,email,clave) VALUES('$nombre','$apellido','$email','$clave')";
	if($mysqli->query($query)){
		print "<script>alert(\"Registro exitoso.\");window.location='index.html';</script>";

	}
	else{
		echo"Ocurrio Un Error, el correo ya existe.";
	}




	


?>