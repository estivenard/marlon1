<?php

	require('conexion.php');
	$id=$_GET['id'];
	$query="DELETE FROM empleados WHERE id='$id'";
	$resultado=$mysqli->query($query);
	
	if($mysqli->query($query)){
		echo "Datos Eliminados Con Éxito Mijo";

	}
	else{
		echo"Ocurrio Un Error";
	}

	?>
