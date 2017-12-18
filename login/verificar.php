<?php
session_start();
include "../conexion.php";
$re=mysql_query("select * from usuarios where Usuario='".$_POST['Usuario']."' AND 
Password='".$_POST['Password']."'")	or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['Nombre'],
			'Apellido'=>$f['Apellido']);
	}
	if(isset($arreglo)){//si existe el arreglo
		$_SESSION['usuario']=$arreglo;
		header("Location: ../menu.php");
	}else{
		header("Location: ../index.php?error=datos no validos");
	}
?>