<?php

class ViewLesson_C extends Controller {

	public static function doSomething() {
        $userid = self::isLoggedIn();
		$profil = Model::getProfil($userid)[0]['profil'];
		if ($profil == 6) {
			$GLOBALS['lessons'] = ViewLesson_M::listMyLesson($userid);
		} else {
			$GLOBALS['lessons'] = ViewLesson_M::listLesson();
		}
		if(isset($_GET['id']))
		{
			$user = EditLesson_M::deleteLesson($_GET['id']);
			header('Location: view_lesson');
			
		}
	}

}

?>
