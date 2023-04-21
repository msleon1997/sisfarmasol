<?php


$client = FichaData::getById($_GET["id"]);
$client->del();
Core::redir("./index.php?view=fichaMedic");

