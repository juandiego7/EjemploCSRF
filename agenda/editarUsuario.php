<?php  
	session_start();

	$contrasenaN=$_POST['contrasenaN'];
	$contrasenaR=$_POST['contrasenaR'];
	$username = $_SESSION['username'];
	$_SESSION['err']="";
	
	echo $username;

	include("conexion.php");
	if($contrasenaN==$contrasenaR){
		$lista = $conexion->query("UPDATE usuario SET password = '$contrasenaN' WHERE username='$username'");
		if ($lista) {
			$_SESSION['err']="";
			header("Location: index.php");
		}else{
			$_SESSION['err']="Error actualizando contraseña";
			header("Location: cambiar.php");
		}
	}else{
		$_SESSION['err']="Las contraseñas no coinciden";
		header("Location: cambiar.php");
	}

?>