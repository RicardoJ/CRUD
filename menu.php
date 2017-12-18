<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Menú</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	
</head>
<body>

<?php
	
	session_start();
    include "./conexion.php";
	if(!isset($_SESSION["usuario"])){

		header("location:index.php");

	}
?>
<body>
	
<header>
		<img src="./imagenes/logo.png" id="logo">
		
		
	</header>
    <section>
<nav class="menu2">
	  <menu>
	 
	    <li><a href="#" class="selected">Admin</a></li>
	    <li><a href="./Estudiante/gestionEstudiante.php" >Gestión Estudiante</a></li>
	    <li><a href="./docente/gestiondocente.php" >Gestión Docentes</a></li>
		<li><a href="./cursos/gestioncursos.php" >Cursos</a></li>
	    <li><a href="./login/cerrar.php">Salir</a></li>
	  </menu>
	</nav>
</section>

<footer>
<div id="copyright"><p>Ricardo Diaz Herrera</p>
</footer>
</body>
</html>