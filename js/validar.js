function validar(){
    var id, nombre, apellido,genero;
    id =document.getElementById("id").value;
    nombre =document.getElementById("nombre").value;
    apellido =document.getElementById("apellido").value;
    genero =document.getElementById("genero").value;
    
expresion = /^\s+$/;
    if(id === ""||nombre === "" || apellido === "" || genero ===""){
        alert ("Revise los campos");
        return false;
    }
    else if(id.length > 10){
        alert ("Id esta largo");
        return false;
    } else if(nombre.length > 10){
        alert ("Nombre esta largo");
        return false;
    } else if(apellido.length > 10){
        alert ("Apellido esta largo");
        return false;
    } else if(genero.length > 10){
        alert ("Genero esta largo");
        return false;
    }else if((id.length == 0 || expresion.test(id))||(nombre.length == 0 || expresion.test(nombre))||
    (apellido.length == 0 || expresion.test(apellido))|| (genero.length == 0 || expresion.test(genero))){
        alert ("No se acepta espacio en blanco");
        return false;
    }else if(isNaN(id)){
        alert ("ID solo numerico");
        return false;
    }
}