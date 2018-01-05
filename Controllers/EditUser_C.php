<?php

class EditUser_C extends Controller {
	
    public static function doSomething() {
		$user = EditUser_M::getUser($_GET['id']);
    }

}

?>
