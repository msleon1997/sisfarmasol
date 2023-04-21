<?php



class Module {

	public static function loadLayout(){
		if(Core::$root==""){
		include "core/app/menus/menu.php";
		}else if(Core::$root=="admin/"){
		include "core/app/".Core::$theme."/menus/menu.php";
		}
	}
        
      

}



?>
