<?php

class ViewUser_C extends Controller {

    public static function doSomething() {
		$GLOBALS['users'] = ViewUser_M::listUser();
		if(isset($_GET['id']))
		{
			$user = ViewUser_M::deleteUser($_GET['id']);
			header('Location: view_user');
		}
    }

}

?>
