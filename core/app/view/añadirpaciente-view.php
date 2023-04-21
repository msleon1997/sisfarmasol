<?php


if(count($_POST)>0){
	$user = new PacientData();
 	$user->dni = $_POST["dni"];
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
        $user->represent = $_POST["represent"];
	$user->gender = $_POST["gender"];
	$user->age = $_POST["age"];
	
	/*$user->sick = $_POST["sick"];
	$user->medicaments = $_POST["medicaments"];
	$user->alergy = $_POST["alergy"];*/
	

	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->add();

print "<script>window.location='index.php?view=pacientes';</script>";


}
