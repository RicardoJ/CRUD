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
<title>Eliminar</title>

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

<h1>Eliminar Docente</h1>
<form name="form1" method="post"  action="../docente/EliminarDocente.php" onsubmit ="return validar();">
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
    $busqueda = mysql_query("SELECT ID FROM docente WHERE ID ='$id'");
    if(mysql_num_rows($busqueda) > 0){
  $resultado= mysql_query("DELETE FROM `docente` WHERE `ID`= $id",$con) or die("Error al eliminar");
 $mensaje ="los datos se han eliminado";
 print "<script>alert('$mensaje'); window.location= '../docente/EliminarDocente.php';</script>" ;
}else{
        $mensaje="ERROR no existe en la BD";
        print "<script>alert('$mensaje'); window.location= '../docente/EliminarDocente.php';</script>";
    }
}


?>

</section>
</body>
</html>