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
	<title>Gestion Estudiante</title>
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
	    <li><a href="#" class= "selected" >Gestión Estudiante</a></li>
		<li><a href="../docente/gestiondocente.php" >Gestión Docentes</a></li>
		<li><a href="../cursos/gestioncursos.php" >Cursos</a></li>
		<li><a href="../login/cerrar.php">Salir</a></li>
	  </menu>
	</nav>

	
	
	<table>
		<tr>
		<form action="RegistrarEstudiante.php">
			<td>Registrar</td>
			<td><input type="submit" name="registrarestudiante" value="Registrar Estudiantes" id="btn"></td>
			</form>
</tr>
<tr>
<form action="MostrarEstudiante.php">
			<td>Consultar</td>
			<td><input type="submit" name="mostarE" value="Mostrar Estudiantes" id="btn"></td>
	</form>


</tr>
<tr>
<form action="ModificarEstudiante.php">
			<td>Modificar</td>
			<td>
		<input type="submit" name="modificarestudiante" value="Modificar Estudiantes" id="btn"></td>

	</form >

</tr>
<tr>
<form action="EliminarEstudiante.php">
			<td>Eliminar</td>
			<td><input type="submit" name="eliminarE" value="Eliminar Estudiantes" id="btn"></td>
	</form>
</tr>
</table>
	</section>
</body>
</html>