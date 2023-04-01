<?php 
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$correo = $_POST['correo'];
	
	// Contraseña aleatoria de 10 caracteres
	$carcacteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@*";
	$longitud = 10;
	
	$pass = substr(str_shuffle($carcacteres), 0,$longitud);
	// fin de contraseña aleatoria de 10 caracteres

	$celular = $_POST['celular'];
	$direccion = $_POST['direccion'];
	$ciudad = $_POST['ciudad'];
	$pais = $_POST['pais'];
	$estado = 1;

		require("../Controlador/conexion.php");

			($registrar = "INSERT INTO userData (id,userName,userLastname,age,mail,pasuser,phone,userAddress,city,country,state_id_fk) VALUES ('','$nombre','$apellidos','$edad','$correo','$pass','$celular','$direccion','$ciudad','$pais','$estado') ");

				$resultado = mysqli_query($conex,$registrar);
					if(!$resultado){
						echo '<script>alert("Error al registrar el usuario");</script>';
					}else {
						echo '<script>alert("Usuario registrado");</script>';
						echo '<script>alert("Usuario su contraseña es : '.$pass.'");</script>';

							header("refresh:0.5; url=../vista/login.php");
					}

?>