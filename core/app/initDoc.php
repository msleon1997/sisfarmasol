<?php

if(!isset($_GET["action"])){
//	Bootload::load("default");
	ModuleDoc::loadLayoutDoc("index");
}else{
	Action::load($_GET["action"]);
}