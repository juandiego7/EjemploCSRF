<?php
	include("conexion.php");

	$id = $_REQUEST['id'];

	$query="DELETE FROM cita WHERE idcita='$id'";
	$resultado=$conexion->query($query);
	if($resultado){
		header("Location: index.php");
	}
?>