<?php

class ModuleDoc {

	
        
        public static function loadLayoutDoc(){
		if(Core::$root==""){
		include "core/app/menus/menuDoc.php";
		}else if(Core::$root=="admin/"){
		include "core/app/".Core::$theme."/menus/menuDoc.php";
		}
	}


}