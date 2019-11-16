<?php
$mysqli=new mysqli("localhost","root","","isesempleados");
echo "conexion exitosa";
if(mysqli_connect_errno()){
	echo "Conexion Fallida : ", mysql_connect_error();
	exit();
}
?>
