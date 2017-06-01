<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>

</head>
<body background="calendario-editorial.jpg">
	<center>
		<h1>Registrar usuario</h1>
		<form  method="POST" action="registrarUsuario.php">
			<table style="color: white; font-size: 150%; background-color: #000; opacity: 0.7; border-radius: 30px 30px 30px 30px; ">
				<tr>
					<td>Usuario:</td>
					<td><input type="text" required name="usuario"></td>
				</tr>
				<tr>
					<td>Contraseña:</td>
					<td><input type="password" required name="contrasena"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Registrarse"></td>
					<td><input type="reset" value="limpiar"></td>
				</tr>
			</table>
			<p><?php session_start();
			if (isset($_SESSION['rep'])) {
				echo $_SESSION['rep'];	
			}$_SESSION['rep']="";  ?></p>
		</form>
	</center>
</body>
</html>