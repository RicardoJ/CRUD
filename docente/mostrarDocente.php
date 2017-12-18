<?php
	session_start();
	include "../conexion.php";
	if(isset($_SESSION['usuario'])){
	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script src="../js/validar.js"></script>
<title>Consultar</title>

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

<h1>Consultar</h1>
<form name="form1" method="post"  action="../docente/MostrarDocente.php" onsubmit ="return validar();">
  <table border="0" align="center">
    <tr>
      <td>Identificación</td>
      <td><label for="c_art"></label>
      <input type="text" name="id" id="id" required></td>
    </tr>
    
    <tr>
      <td align="center"><input type="submit" name="consultar" id="enviar" value="Enviar" class=enviar></td>
    </tr>
  </table>
</form>

<?php

if(isset($_POST['consultar'])){
	$id = $_POST["id"];
$resultado= mysql_query("SELECT * FROM `docente` WHERE ID = $id ",$con);
while($consulta = mysql_fetch_array($resultado)){
	echo "
	<table>
	<tr>
		<td><b><center>Nombre</center></b></td>
		<td><b><center>Apellido</center></b></td>
		<td><b><center>Genero</center></b></td>
	</tr>
	<tr>
		<td>".$consulta['NombreD']."</td>
		<td>".$consulta['ApellidoD']."</td>
		<td>".$consulta['GeneroD']."</td>
		
	</tr>
</table>
	";

}
}

?>

</section>
</body>
</html>