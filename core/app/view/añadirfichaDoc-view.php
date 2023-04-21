<?php
//include ("nuevafichaMedic-view.php");
include ("conexion.php");

if(count($_POST)>0){
        $user = new FichaData();
		$medic_id = "NULL";
		$pacient_id = "NULL";
      if($_POST["medic_id"]!=""){ $medic_id = $_POST["medic_id"]; }
      if($_POST["pacient_id"]!=""){ $pacient_id = $_POST["pacient_id"]; }
	
        
	$tratamient= $_POST["tratamient"];
	$ocupation= $_POST["ocupation"];
	$sex = $_POST["sex"];
	$date_born = $_POST["date_born"];
        $date_at = $_POST["date_at"];
	$nacionality = $_POST["nacionality"];
	$est_civil = $_POST["est_civil"];
        $mot_consult= $_POST["mot_consult"];
	$fathers = $_POST["fathers"];
	$liveP = $_POST["liveP"];
        $liveH = $_POST["liveH"];
        $liveS = $_POST["liveS"];
	$brothers = $_POST["brothers"];
        $antecedents = $_POST["antecedents"];
        $alergy = $_POST["alergy"];
        $sons = $_POST["sons"];
        $dbt = $_POST['dbt'];
        $hta = $_POST["hta"];
        $tbc = $_POST["tbc"];
        $gamelar = $_POST["gamelar"]; 
        $othersHF = $_POST["othersHF"];
        $alcohol = $_POST["alcohol"];
        $tabaco = $_POST["tabaco"]; 
        $drugs= $_POST["drugs"];
        $eat = $_POST["eat"]; 
        $dipsia = $_POST["dipsia"]; 
        $diuresis = $_POST["diuresis"]; 
        $catarsis = $_POST["catarsis"]; 
        $somnia = $_POST["somnia"]; 
        $child = $_POST["child"]; 
        $adult = $_POST["adult"]; 
        $quirurgycs = $_POST["quirurgycs"]; 
        $traumatologycs = $_POST["traumatologycs"];
        $othersF = $_POST["othersF"];
        $othersP = $_POST["othersP"];
//        print "<script>window.location='index.php?view=fichaMedic';</script>";
}
$query="INSERT INTO fichamedic(medic_id, pacient_id, tratamient, ocupation, sex, date_born, date_at, nacionality, est_civil, mot_consult, antecedents, fathers, brothers, sons, liveP, liveH, liveS, dbt, hta, tbc, gamelar, othersHF, alcohol, tabaco, drugs, eat, dipsia, diuresis, catarsis, somnia, othersF, child, adult, quirurgycs, traumatologycs, alergy, othersP )VALUES('$medic_id','$pacient_id', 
 
		'$tratamient', 
		'$ocupation',    
		'$sex', 
		'$date_born',
                '$date_at',
		'$nacionality', 
		'$est_civil',
		'$mot_consult', 
		'$antecedents', 
		'$fathers',
		'$brothers',
                '$sons', 
                '$liveP',
                '$liveH', 
                '$liveS',
                '$dbt', 
                '$hta',
                '$tbc', 
                '$gamelar',
                '$othersHF', 
                '$alcohol',
                '$tabaco', 
                '$drugs',
                '$eat', 
                '$dipsia',
                '$diuresis',
                '$catarsis',
                '$somnia',
                '$othersF',    
                '$child',
                '$adult',
                '$quirurgycs',
                '$traumatologycs',
                '$alergy',
                '$othersP')";

$resultado=$conexion->query($query);



if($resultado){
    Core::alert("guardado exitosamente");
    print "<script>window.location='indexDoc.php?view=fichaMedicDoc';</script>";
}else {
   Core::alert("no se ha podido guardar verifique ");
}

