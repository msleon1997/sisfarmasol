<?php

class ModuleRep {

	
        
        public static function loadLayoutRep(){
		if(Core::$root==""){
		include "core/app/menus/menuRep.php";
		}else if(Core::$root=="admin/"){
		include "core/app/".Core::$theme."/menus/menuRep.php";
		}
	}


}