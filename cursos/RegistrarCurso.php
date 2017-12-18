<?php
	session_start();
	include "../conexion.php";
	if(isset($_SESSION['usuario'])){
	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script src="../js/validarCurso.js"></script>
<title>Registro Curso</title>

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
		<li><a href="../cursos/gestioncursos.php" >Cursos</a></li>
	    <li><a href="../login/cerrar.php">Salir</a></li>
	  </menu>
	</nav>

<h1>Registro Cursos</h1>
<form name="form1" method="post" action="../cursos/registro_curso.php" onsubmit ="return validarcurso();">
  <table border="0" align="center">
    <tr>
      <td>Codigo</td>
      <td><label for="c_art"></label>
      <input type="text" name="codigo" id="codigo" required></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="seccion"></label>
      <input type="text" name="nombre" id="nombre" required></td>
    </tr>
    <tr>
      <td>Observaciones</td>
      <td><label for="n_art"></label>
      <input type="text" name="observacion" id="observacion" required></td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" class=enviar></td>
    </tr>
  </table>
</form>
</section>
</body>
</html>