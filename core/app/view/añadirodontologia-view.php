<?php
//include ("nuevafichaMedic-view.php");
include ("conexion.php");


if(count($_POST)>0){
        $user = new OdontoData();
		$medic_id = "NULL";
		$pacient_id = "NULL";
      if($_POST["medic_id"]!=""){ $medic_id = $_POST["medic_id"]; }
      if($_POST["pacient_id"]!=""){ $pacient_id = $_POST["pacient_id"]; }
	
        $age=$_POST["age"];    
	$tratamient=$_POST["tratamient"];
	$ocupation= $_POST["ocupation"];
	$sex = $_POST["sex"];
	$date_born = $_POST["date_born"];
        $date_at = $_POST["date_at"];
	$nacionality = $_POST["nacionality"];
	$est_civil = $_POST["est_civil"];
        $mot_consult= $_POST["mot_consult"];
        $antecedents = $_POST["antecedents"];
        $sick = $_POST["sick"];
        $otro = $_POST["otro"];
        $alergy = $_POST["alergy"];
        $otroA = $_POST["otroA"];
        $ptratamiento = $_POST["ptratamiento"];
        $alcohol = $_POST["alcohol"];
        $tabaco = $_POST["tabaco"]; 
        $drugs= $_POST["drugs"];
        $eat = $_POST["eat"]; 
        $othersP = $_POST["othersP"];
       
//        print "<script>window.location='index.php?view=fichaMedic';</script>";
}
$query="INSERT INTO odontology(medic_id, pacient_id, age, ocupation, sex, date_born, date_at, nacionality, est_civil, mot_consult, antecedents, alcohol, tabaco, drugs, eat, othersP, tratamient, otro, otroA, ptratamiento, sick, alergy )VALUES('$medic_id','$pacient_id', 
 
		'$age', 
		'$ocupation',    
		'$sex', 
		'$date_born',
                '$date_at',
		'$nacionality', 
		'$est_civil',
		'$mot_consult', 
		'$antecedents', 
                '$alcohol',
                '$tabaco', 
                '$drugs',
                '$eat', 
                '$othersP',
                '$tratamient',
                '$otro',
                '$otroA', 
                '$ptratamiento',
                '$sick', 
                   
                '$alergy' 
                )";

$resultado=$conexion->query($query);



if($resultado){
    Core::alert("guardado exitosamente");
    print "<script>window.location='indexDoc.php?view=odontologia';</script>";
}else {
   Core::alert("no se ha podido guardar verifique ");
}

