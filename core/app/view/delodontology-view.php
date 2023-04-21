<?php

$client = OdontoData::getById($_GET["id"]);
$client->del();
Core::redir("./indexDoc.php?view=odontologia");


