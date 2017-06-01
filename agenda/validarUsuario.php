<?php
	session_start();

	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	$_SESSION['err']="";

	echo $usuario;
	echo $contrasena;

	include("conexion.php");

	$lista = $conexion->query("SELECT * FROM usuario WHERE username='$usuario' AND password='$contrasena'");
	
	if ($row=$lista->fetch_assoc()) {
		$_SESSION['username']=$row['username'];
		$_SESSION['err']="";
		header("Location: index.php");
	}else{
		$_SESSION['err']="Datos incorrectos";
		header("Location: login.php");
	}
?>