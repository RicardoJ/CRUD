<?php
session_start();
include "../conexion.php";
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$observacion = $_POST["observacion"];


$insertar = "INSERT INTO `cursos`(`CodigoC`, `NombreC`, `Observaciones`) VALUES ('$codigo','$nombre',
'$observacion')";

$verificar_ID = mysql_query("SELECT * FROM cursos WHERE CodigoC ='$codigo'",$con);
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