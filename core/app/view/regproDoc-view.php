<?php


//incluir los dos archivos de la conexion del formulario de contactenos y la pagina principal
include ("registrarDoc-view.php");
include ("conexion.php");

//creo las variables con el metodo post
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $pass=sha1(md5($_POST['password']));
    
    
//query a la base de datos del formulario de contactos
    
    $query="INSERT INTO user(name, lastname, username, password , is_active, is_admin) VALUES('$name','$lastname','$username', '$pass','1','')";
$resultado=$conexion->query($query);
print "<script>window.location='indexDoc.php?view=loginDoc';</script>";


    

if($resultado){
    Core::alert("guardado exitosamente");
}else {
    Core::alert("no guardado verifique ");
}
