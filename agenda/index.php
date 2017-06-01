<!DOCTYPE html>
<html>
<head>
  	<title>Agenda</title>
  	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="calendario-editorial.jpg" style="font-size: 150%;">
	<header style="text-align: right;">
		<h3>
			<?php
			session_start();
			if (isset($_SESSION['username'])) {
				echo $_SESSION['username'];
				$username = $_SESSION['username'];
			}else{
			  header("Location: login.php");
			}
			?>
			<a href="cerrarSession.php" style="font-size: 15px; color: red;">(Cerrar Sesion)</a>
			<a href="cambiar.php" style="font-size: 15px; color: blue;">Cambiar contraseña</a>
		</h3>
	</header>
	<center>
		<img src="agenda.png" alt="mi agenda">
		<br/>
		<table class="table-condensed" style="background-color: #000; color: white; opacity: .7; border-radius: 30px 30px 30px 30px; font-size: 170%;">
			<thead>
				<th><a href="formulariocita.php" >Nueva Cita</a></th>
				<th colspan="2">Lista de Citas</th>
			</thead>
			<tbody>
				<tr>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Asunto</td>
				</tr>
				<?php 
					include("conexion.php");
					$citas = $conexion->query("SELECT * FROM cita WHERE usuario='$username'");
					while ($row=$citas->fetch_assoc()) { 
				?>
					<tr>
						<td><?php echo $row['dia']; ?></td>
						<td><?php echo $row['hora']; ?></td>
						<td><?php echo $row['asunto']; ?></td>
						<td><a href="eliminarCita.php?id=<?php echo $row['id'];?>"><img src="delete-circle.png"></a></td>
					</tr>
				<?php
					}
				?>
				
			</tbody>
		</table>
	</center>
</body>
</html>