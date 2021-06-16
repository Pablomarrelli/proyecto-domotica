<?php
include '../conexion.php';
include '../funciones.php';
//var_dump($_POST);
switch ($_POST['action']) {
	case 'registrar':
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$documento = $_POST['dni'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$password = $POST['password'];

		$query = "INSERT INTO usu_usuarios (nombre, apellido, mail,telefono,documento) VALUES ('$nombre','$apellido','$correo','$telefono','$documento')";
			
		if ($conn->query($query) === TRUE) {
		  echo json_encode("success");
		  header('Location: '.base_url('index.php'));
		} else {
		  echo "Error: " . $query . "<br>" . $conn->error;
		}
		break;
	case 'login':
		$user = $_POST['user'];
		$pass = $_POST['password'];
		$query= "
			SELECT users.*, roles.nombre AS rol FROM usu_usuarios users
			LEFT JOIN usu_roles AS roles ON users.id_rol = roles.id_rol
			WHERE mail='$user' AND  documento='$pass'
		";
		$rs = $conn->query($query);

		if($rs->num_rows != 0){
			$row = $rs->fetch_assoc();
			$_SESSION['login'] = true;
			switch ($row['rol']) {
				case 'administrador':
					header('Location: '.base_url('vistas/panel-Admin.php'));
				break;
				case 'cliente':
					header('Location: '.base_url('vistas/panel-User.php'));
				break;
				case 'invitado':
				// TO DO
				break;
				default:
					# code...
					break;
			}
		}
		else{
			$_SESSION['login'] = false;
		    header('Location: '.base_url('index.php'));
		}
		break;
	default:
		# code...
		break;
}
?>