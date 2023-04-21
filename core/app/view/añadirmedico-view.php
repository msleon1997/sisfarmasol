<?php


if(count($_POST)>0){
	$user = new MedicData();
	$category_id = "NULL";
	if($_POST["category_id"]!=""){ $category_id = $_POST["category_id"]; }
	$user->dni = $_POST["dni"];
        $user->nameDoc = $_POST["nameDoc"];
	$user->category_id = $category_id;
	$user->lastnameDoc = $_POST["lastnameDoc"];
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->add();

print "<script>window.location='index.php?view=medicos';</script>";


}