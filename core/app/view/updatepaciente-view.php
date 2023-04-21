<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(count($_POST)>0){
	$user = PacientData::getById($_POST["user_id"]);
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
	$user->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=pacientes';</script>";


}
