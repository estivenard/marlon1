<!DOCTYPE html>
<html>
<head>
	<title>Modal Proveedor</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<center>
<section>

	<br>
	<h1>Empleados</h1>
	<table>
	<thead>
			
			<tr>
			<th>
	<div class="container" align="left">
		<h4>Ingresar de Producto</h4>
		<!--modal-->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			Agregar			
		</button>

		<!-- the modal-->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

		<!--modal Header -->
		<div class="modal-hearder">
			<h4 class="modal-litle">Bienvenido</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

		<!-- modal Body -->
		<div class="modal-body">
			<form method="post" action="GuardarDatosproducto.php" >
			<div class="form-group">
				<label for="text" >Nombre del Producto: </label>
				<input type="text" class="form-control" id="nompro">
			</div>

			<div class="form-group">
				<label for="int" >Precio: </label>
				<input type="int" class="form-control" id="prec">
			</div>

			<div class="form-group">
				<label for="int" >cantidad: </label>
				<input type="int" class="form-control" id="cant">
			</div>

			<div class="form-group">
				<label for="text" >descripcion: </label>
				<input type="text" class="form-control" id="desc">
			</div>

			<div class="form-group">
			<label for="int" >id proveedor: </label>
			<input type="int" class="form-control" id="idprov">
			</div>

			</form>
					</div>
					
		<!--modal footer-->
			<div class="modal-footer">
				<button type="button" value=" Send" class="btn btn-danger" data-dismiss="modal"> Guardar</button>
			</div>
				
		</div>
		</div>
		</div>
		</div>
	</th>
	<th>

		<div class="container" >
		<h4>Ingresar Proveedor</h4>
		<!--modal-->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" >
			Agregar			
		</button>

		<!-- the modal-->
		<div class="modal" id="myModal2">
			<div class="modal-dialog">
				<div class="modal-content">

		<!--modal Header -->
		<div class="modal-hearder" >
			<h4 class="modal-litle">Bienvenido</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

		<!-- modal Body -->
		<div class="modal-body" >
			<form method="post" action="GuardarDatosproveedor.php" >
			<div class="form-group">
				<label for="int" >NIT proveedor: </label>
				<input type="number" class="form-control" name="nitproveedor">
			</div>
			<div class="form-group">
				<label for="text" >nombre proveedor: </label>
				<input type="text" class="form-control" name="nombreproveedor">
			</div>			
			<div class="form-group">
			<label for="text" >correo: </label>
			<input type="email" class="form-control" name="correoproveedor">
			</div>
						
			<div class="form-group">
			<label for="int" >telefono proveedor: </label>
			<input type="number" class="form-control" name="telefonoproveedor">
			</div>
            <div class="modal-footer">
            <button type="button" value="Send" class="btn btn-secondary" data-dismiss="modal">guardar</button>
          </div>
			
		</div>
					
					
		
		</form>
		</div>
		</div>
		</div>
		</div>

</body>
</html>