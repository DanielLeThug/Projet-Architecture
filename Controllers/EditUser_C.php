<?php

class EditUser_C extends Controller {

	public static function onLoad()
	{
		$user = EditUser_M::getUser($_GET['id']);
	}

    public static function doSomething() {
    }

}

?>
