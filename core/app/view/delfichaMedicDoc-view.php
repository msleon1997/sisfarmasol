<?php


$client = FichaData::getById($_GET["id"]);
$client->del();
Core::redir("./indexDoc.php?view=fichaMedicDoc");

