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
<script src="../js/validar.js"></script>
<title>Registro Estudiante</title>

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

<h1>Registro de Docente</h1>
<form name="form1" method="post" action="../docente/registro_docente.php" onsubmit ="return validar();">
  <table border="0" align="center">
    <tr>
      <td>Identificación</td>
      <td><label for="c_art"></label>
      <input type="text" name="id" id="id" required></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="seccion"></label>
      <input type="text" name="nombre" id="nombre" required></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="n_art"></label>
      <input type="text" name="apellido" id="apellido" required></td>
    </tr>
    <tr>
      <td>Genero</td>
      <td> <select name="cmbsexo2">
          <option value ="masculino">Masculino</option>
          <option value ="femenino">Femenino</option>

        </select></td>
    </tr>
    
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" class=enviar></td>
    </tr>
  </table>
</form>
</section>
</body>
</html>