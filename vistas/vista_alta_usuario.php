<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuarios</title>
</head>
<body>
	<h2>Formulario Registro</h2>
	<form action="../controladores/gestion_usuarios.php" method="POST" style="border: 2px solid black; width: 200px; display: block;margin-left: auto;margin-right: auto; text-align: center;">
		<label for="nombre">Nombre:</label><br>
	  	<input type="text" id="nombre" name="nombre" required><br>
	  	<label for="apellido">Apellido:</label><br>
	  	<input type="text" id="apellido" name="apellido" required><br>
	  	<label for="dni">Documento:</label><br>
	  	<input type="text" id="dni" name="dni" required><br>
	  	<label for="correo">Correo:</label><br>
	  	<input type="text" id="correo" name="correo"><br>
	  	<label for="telefono">Teléfono:</label><br>
	  	<input type="text" id="telefono" name="telefono"><br>
	  	<button type="submit">Enviar</button>
	</form>
</body>
</html>