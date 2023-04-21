<?php

if(count($_POST)>0){
    $user = FichaData::getById($_POST["user_id"]);
   
    $medic_id = "NULL";
    $pacient_id = "NULL";
	
    if($_POST["medic_id"]!=""){ $medic_id = $_POST["medic_id"]; }
    if($_POST["pacient_id"]!=""){ $pacient_id = $_POST["pacient_id"]; }
       
        $user->medic_id =$medic_id;
        $user->pacient_id =$pacient_id;
//        $user->dni = $_POST["dni"];
	//$user->age = $_POST["age"];
        $user->tratamient= $_POST["tratamient"];
	$user->ocupation= $_POST["ocupation"];
	$user->sex = $_POST["sex"];
	$user->date_born = $_POST["date_born"];
        $user->date_at = $_POST["date_at"];
	$user->nacionality = $_POST["nacionality"];
	$user->est_civil = $_POST["est_civil"];
        $user->mot_consult= $_POST["mot_consult"];
	$user->fathers = $_POST["fathers"];
	$user->liveP = $_POST["liveP"];
        $user->liveH = $_POST["liveH"];
        $user->liveS = $_POST["liveS"];
	$user->brothers = $_POST["brothers"];
        $user->antecedents = $_POST["antecedents"];
        $user->alergy = $_POST["alergy"];
        $user->sons = $_POST["sons"];
        $user->dbt = $_POST['dbt'];
        $user->hta = $_POST["hta"];
        $user->tbc = $_POST["tbc"];
        $user->gamelar = $_POST["gamelar"]; 
        $user->othersHF = $_POST["othersHF"];
        $user->alcohol = $_POST["alcohol"];
        $user->tabaco = $_POST["tabaco"]; 
        $user->drugs= $_POST["drugs"];
        $user->eat = $_POST["eat"]; 
        $user->dipsia = $_POST["dipsia"]; 
        $user->diuresis = $_POST["diuresis"]; 
        $user->catarsis = $_POST["catarsis"]; 
        $user->somnia = $_POST["somnia"]; 
        $user->child = $_POST["child"]; 
        $user->adult = $_POST["adult"]; 
        $user->quirurgycs = $_POST["quirurgycs"]; 
        $user->traumatologycs = $_POST["traumatologycs"];
        $user->othersF = $_POST["othersF"];
        $user->othersP = $_POST["othersP"];
	$user->update();



    
    Core::alert("Actualizado exitosamente!");
    print "<script>window.location='indexDoc.php?view=fichaMedicDoc';</script>";

}