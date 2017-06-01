<?php
	include('conexion.php');

	$dia= $_POST['fecha'];
	$hora=$_POST['hora'];
	$asunto=$_POST['asunto'];
	session_start();
	$cedula=$_SESSION['cedula'];
	$query="INSERT INTO cita(idcita,dia,hora,asunto,usuario) VALUES (NULL,'$dia','$hora','$asunto','$cedula')";
	$resultado=$conexion->query($query);
	if ($resultado) {
		header("Location: index.php");
	}else{
		$_SESSION['ocupado']="Dia y hora ocupados con otra cita";
		header("Location: formulariocita.php");
	}
?>