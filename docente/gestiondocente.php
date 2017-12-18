<?php
session_start();
	include "../conexion.php";
	if(isset($_SESSION['usuario'])){

	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Gestion Docente</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	
</head>
<body>
	<header>
		<img src="../imagenes/logo.png" id="logo">
		
		
	</header>
	<section>
	<nav class="menu2">
	  <menu>
	    <li><a href="../menu.php" >Admin</a></li>
	    <li><a href="../estudiante/gestionEstudiante.php" >Gestión Estudiante</a></li>
		<li><a href="#" class ="selected" >Gestión Docentes</a></li>
		<li><a href="../cursos/gestioncursos.php" >Cursos</a></li>
		<li><a href="../login/cerrar.php">Salir</a></li>
	  </menu>
	</nav>

	
	
	<table>
		<tr>
		<form action="RegistrarDocente.php">
			<td>Registrar</td>
			<td><input type="submit" name="registrardocente" value="Registrar Docente" id="btn"></td>
			</form>
</tr>
<tr>
<form action="MostrarDocente.php">
			<td>Consultar</td>
			<td><input type="submit" name="mostrardocente" value="Mostrar Docente" id="btn"></td>
	</form>


</tr>
<tr>
<form action="ModificarDocente.php">
			<td>Modificar</td>
			<td>
		<input type="submit" name="Busquedadocente" value="Modificar Docente" id="btn"></td>

	</form >

</tr>
<tr>
<form action="EliminarDocente.php">
			<td>Eliminar</td>
			<td><input type="submit" name="eliminardocente" value="Eliminar Docente" id="btn"></td>
	</form>
</tr>
</table>
	</section>
</body>
</html>