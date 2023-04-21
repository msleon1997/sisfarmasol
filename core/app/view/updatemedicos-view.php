<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(count($_POST)>0){
	$user = MedicData::getById($_POST["user_id"]);

	$category_id = "NULL";
	if($_POST["category_id"]!=""){ $category_id = $_POST["category_id"]; }
	$user->dni= $_POST["dni"];
        $user->nameDoc = $_POST["nameDoc"];
	$user->category_id = $category_id;
	$user->lastnameDoc = $_POST["lastnameDoc"];
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->update();


print "<script>window.location='index.php?view=medicos';</script>";


}