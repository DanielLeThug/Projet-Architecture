<?php

class ViewUser_C extends Controller {

    public static function doSomething() {
		$GLOBALS['users'] = ViewUser_M::listUser();
		if(isset($_GET['id']))
		{
			$user = EditUser_M::deleteUser($_GET['id']);
		}
    }

}

?>
