function validarcurso(){
    var codigo,nombre,observacion;
    codigo =document.getElementById("codigo").value;
    nombre =document.getElementById("nombre").value;
    observacion = document.getElementById("observacion").value;
    
expresion = /^\s+$/;
    if(codigo === "" || nombre === "" || observacion ===""){
        alert ("Revise los campos");
        return false;
    }
    else if(codigo.length > 10){
        alert ("Codigo esta largo");
        return false;
    } else if(nombre.length > 10){
        alert ("Nombre esta largo");
        return false;
    } else if(Observacion.length > 300){
        alert ("Observaciones esta largo");
        return false;
    }else if((codigo.length == 0 || expresion.test(codigo))||
    (nombre.length == 0 || expresion.test(nombre))){
        alert ("No se acepta espacio en blanco");
        return false;
    }else if(isNaN(codigo)){
        alert ("codigo solo numerico");
        return false;
    }
}