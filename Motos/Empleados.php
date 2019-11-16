<!DOCTYPE html>
<html lang="es">
<head>
	<title>Empleados</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    
      </style>
  	
	</head>

<body background="Imagenes\ingresar.jpg" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
	<nav class="navbar navbar-expand-md navbar-dark bg-primary container">
 	<ul class="navbar-nav">
   	<li class="nav-item active ">
    </li>
    <li class="nav-item active p-2 lead">
      <a class="nav-link " href="http://localhost/Motos/">Inicio</a>
    </li>
    <li class="nav-item active p-2 lead">
      <a class="nav-link " href="http://localhost/Motos/Registrar.html">Registrar</a>
    </li>
    <li class="nav-item active p-2 lead">
      <a class="nav-link " href="http://localhost/Motos/Empleados.php">Empleados</a>
    </li>
    <li class="nav-item active p-2 lead">
      <a class="nav-link " href="#">Salir</a>
    </li>
  	</ul>
	</nav>
<center>
<section>

	<br>
	<h1>Empleados</h1>

	<table  background="Imagenes\Blanco.jpg" id="t1" border="1">
		
		<thead>
			
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			<?php
				require_once "conexion.php";
				$query="SELECT * FROM empleados";
				$consulta1=$mysqli->query($query);
				while($fila=$consulta1->fetch_array(MYSQLI_ASSOC)){
					echo "<tr>
						<td>".$fila['id']."</td>
						<td>".$fila['nombre']."</td>
						<td>".$fila['apellido']."</td>
						<td>".$fila['email']."</td>
						<td><a href='actualizar.php?id=".$fila['id']."'>Actualizar</a></td>
						<td><a href='eliminar.php?id=".$fila['id']."'>Eliminar</a></td>
					</tr>";
				}
			?>			

		</tbody>

	</table>


</section>
</center>
</body>

</html>