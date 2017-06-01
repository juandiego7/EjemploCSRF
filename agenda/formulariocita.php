<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR CITA</title>
</head>
<body background="calendario-editorial.jpg">
	<center>
		<h1>REGISTRAR CITA</h1>
	    <form method="POST" action="registrarcita.php">
			<table style="color: white; font-size: 150%; background-color: #000; opacity: 0.7; border-radius: 30px 30px 30px 30px; ">
			    <tr>
					<td>Fecha:</td>
					<td><input type="date" required name="fecha"></td>
				</tr>
				<tr>
					<td>Hora:</td>
					<td><input type="time" required name="hora"></td>
				</tr>
				<tr>
					<td>Asunto:</td>
					<td><input type="text" required name="asunto"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Registrar"></td>
					<td><input type="reset" value="Limpiar" formaction="index.php"></td>
				</tr>
			</table>
			<p style="color: red;"><?php session_start();
				if (isset($_SESSION['ocupado'])) {
					echo $_SESSION['ocupado'];	
				}$_SESSION['ocupado']="";  ?></p>
		</form>
	</center>
</body>
</html>