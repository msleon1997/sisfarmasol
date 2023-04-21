<?php
//include ("nuevafichaMedic-view.php");
include ("conexion.php");

if(count($_POST)>0){
        $user = new OdontogramaData();
		
	
        
	$observaciones= $_POST["observaciones"];
	$diente= $_POST["diente"];
	$tratamientoyenfermedad = $_POST["tratamientoyenfermedad"];
	
//        print "<script>window.location='index.php?view=fichaMedic';</script>";
}
$query="INSERT INTO odontograma(tratamientoyenfermedad, diente, observaciones)VALUES('$tratamientoyenfermedad','$diente', 
 
		'$observaciones')";

$resultado=$conexion->query($query);


if($resultado){
    Core::alert("guardado exitosamente");
    
}else {
   Core::alert("no se ha podido guardar verifique ");
}




