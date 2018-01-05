<?php

class ViewLesson_C extends Controller {

	public static function doSomething() {
		if(isset($_GET['id']))
		{
			$user = EditLesson_M::deleteLesson($_GET['id']);
		}
	}

}

?>
