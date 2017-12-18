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
	<title>Gestion Cursos</title>
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
		<li><a href="../docente/gestiondocente.php" >Gestión Docentes</a></li>
		<li><a href= "#" class= "selected">Cursos</a></li>
		<li><a href="../login/cerrar.php">Salir</a></li>
	  </menu>
	</nav>

	
	
	<table>
		<tr>
		<form action="RegistrarCurso.php">
			<td>Registrar</td>
			<td><input type="submit" name="registrarcurso" value="Registrar curso" id="btn"></td>
			</form>
</tr>
<tr>
<form action="MostrarCurso.php">
			<td>Consultar</td>
			<td><input type="submit" name="mostarCurso" value="Mostrar Curso" id="btn"></td>
	</form>
</tr>
<tr>
<form action="ModificarCurso.php">
			<td>Modificar</td>
			<td>
		<input type="submit" name="modificarcurso" value="Modificar Curso" id="btn"></td>
	</form >
</tr>
<tr>
<form action="EliminarCurso.php">
			<td>Eliminar</td>
			<td><input type="submit" name="eliminarcurso" value="Eliminar Curso" id="btn"></td>
	</form>
</tr>
</table>
	</section>
</body>
</html>