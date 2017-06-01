<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesion</title>
	  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="calendario-editorial.jpg">
	<?php
		session_start();
		if (isset($_SESSION['username'])) {
			header("Location: index.php");
		}
	?>
	<center>
		<h1>Inicio de Sesion</h1>
		<form action="validarUsuario.php" method="POST">
			<table style="font-size: 150%;" >
				<tr>
					<td>Usuario:</td>
					<td><input type="text" required name="usuario"></td>
				</tr>
				<tr>
					<td>Contraseña:</td>
					<td><input type="password" required name="contrasena"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Ingresar"></td>
					<td><input type="submit" value="Registrarse" formaction="registrar.php"></td>
				</tr>
			</table>
			<p style="color: red;">
				<?php
					if (isset($_SESSION['err'])){
						echo $_SESSION['err'];	
					} 
				?>
			</p>
			<?php
				$_SESSION['err']="";
			?>
		</form>
	</center>
</body>
</html>