<?php
session_start();
include "../conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["cmbsexo2"];

$insertar = "INSERT INTO `docente`(`ID`, `NombreD`, `ApellidoD`, `GeneroD`) VALUES ('$id','$nombre',
'$apellido','$genero')";

$verificar_ID = mysql_query("SELECT * FROM docente WHERE ID ='$id'",$con);
if(mysql_num_rows($verificar_ID) > 0){

    echo '<script language="javascript">alert("Usuario ya esta registrado");
    window.history.go(-1);
    </script>'; 
exit;
}

$resultado = mysql_query($insertar, $con);

if(!$resultado){
    
    echo '<script language="javascript">alert("Error no se pudo registrar");
    window.history.go(-1);
    </script>'; 
}else{
    
    echo '<script language="javascript">alert("Registro Exitoso");
    window.history.go(-1);
    </script>'; 
}
mysql_close($con); 