<?php

if(count($_POST)>0){
	$user = ReservationData::getById($_POST["id"]);
	$user->title = $_POST["title"];
	$user->pacient_id = $_POST["pacient_id"];
	$user->medic_id = $_POST["medic_id"];
        $user->category = $_POST["category"];
        $user->category_child_id = $_POST["category_child_id"];
	$user->date_at = $_POST["date_at"];
	$user->time_at = $_POST["time_at"];
	$user->note = $_POST["note"];
	$user->status_id = $_POST["status_id"];
	$user->sick = $_POST["sick"];
	$user->symtoms = $_POST["symtoms"];
	$user->medicaments = $_POST["medicaments"];

	$user->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=reservaciones';</script>";


}

