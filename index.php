<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Bienvenido</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script src="./js/validar.js"></script>

</head>
<body>
	<header>
		<img src="./imagenes/logo.png" id="logo">
		
		</a>
	</header>
	<section><br><br><br><br>
	<form id="formulario" method="post" action="./login/verificar.php">
		<?php 
		if(isset($_GET['error'])){
			echo '<center>Datos No Validos</center>';
		}
		?>
		<br>
		<label for="usuario">Usuario</label><br>
		<input type="text" id="usuario" name="Usuario" placeholder="usuario" required><br>
		<label for="password">Password</label><br>
		<input type="password" id="password" name="Password" placeholder="password" required><br>
		<input type="submit" name="aceptar" value="INICIAR SESIÓN" class="aceptar">
		
	</form>
	
	</section>
	<footer>
<div id="copyright"><p>Ricardo Diaz Herrera</p>
</footer>
</body>
</html>