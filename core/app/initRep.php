<?php

if(!isset($_GET["action"])){
//	Bootload::load("default");
    ModuleRep::loadLayoutRep("index");
	
}else{
	Action::load($_GET["action"]);
}