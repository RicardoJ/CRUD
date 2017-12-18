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
<title>Modificar</title>

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

<h1>Modificar Curso</h1>
<form name="form1" method="post"  action="../cursos/ModificarCurso.php" onsubmit ="return validar();">
  <table border="0" align="center">
  <tr>
      <td>Codigo</td>
      <td><label for="c_art"></label>
      <input type="text" name="id" id="id" required></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="seccion"></label>
      <input type="text" name="nombre" id="nombre" required></td>
    </tr>
    <tr>
      <td>Observaciones</td>
      <td><label for="n_art"></label>
      <input type="text" name="observaciones" id="observaciones" required></td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="modificar" id="enviar" value="Modificar" class=enviar></td>
    </tr>
  </table>
</form>

<?php

if(isset($_POST['modificar'])){
    $id = $_POST["id"];
    $nombre =$_POST["nombre"];
    $observaciones =$_POST["observaciones"];
    
    $busqueda = mysql_query("SELECT Codigoc FROM cursos WHERE CodigoC ='$id'");
    if(mysql_num_rows($busqueda) > 0){
        $resultado= mysql_query("UPDATE `cursos` SET `NombreC`='$nombre',`Observaciones`='$observaciones' WHERE `CodigoC` = $id",$con)
        or die("Error al actualizar");
 $mensaje ="los datos se han actualizado";
 print "<script>alert('$mensaje'); window.location= '../cursos/ModificarCurso.php';</script>" ;
}else{
        $mensaje="ERROR no se pudo actualizar";
        print "<script>alert('$mensaje'); window.location= '../cursos/ModificarCurso.php';</script>";
    }
}

?>

</section>
</body>
</html>