<?php

class ViewLesson_C extends Controller {

	public static function doSomething() {
        $userid = self::isLoggedIn();
		$GLOBALS['lessons'] = ViewLesson_M::listLesson();
		$GLOBALS['profil'] = Model::getProfil($userid);
		if(isset($_GET['id']))
		{
			$user = EditLesson_M::deleteLesson($_GET['id']);
		}
		$userid = self::isLoggedIn();
	}

}

?>
