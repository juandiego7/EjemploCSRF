<?php
	include("conexion.php");

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	$query = "INSERT INTO usuario(username,password)
			  VALUES('$usuario','$contrasena')";
	$resultado = $conexion->query($query);

	if ($resultado) {
		header("Location: login.php");
	}else{
		session_start();
		$_SESSION['rep']="Datos repetidos";
		header("Location: registrar.php");
	}
?>