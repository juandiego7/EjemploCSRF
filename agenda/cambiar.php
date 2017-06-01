<!DOCTYPE html>
<html>
<head>
	<title>Cambio de contraseña</title>
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
			$username = $_SESSION['username'];
		}
	?>
	<center>
		<h1>Cambiar contraseña</h1>
		<form action="editarUsuario.php" method="POST">
			<table style="color: white; font-size: 150%; background-color: #000; opacity: 0.7; border-radius: 30px 30px 30px 30px; ">
				<tr>
					<td><h2>Usuario: <?php echo $username; ?></h2></td>
				</tr>
				<tr>
					<td>Nueva contraseña:</td>
					<td><input type="password" required name="contrasenaN" style="color: black;"></td>
				</tr>
				<tr>
					<td>Confirmar contraseña:</td>
					<td><input type="password" required name="contrasenaR" style="color: black;"></td>
				</tr>
				<tr style="color: black;">
					<td><input type="submit" value="Cambiar"></td>
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