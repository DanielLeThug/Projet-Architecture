<?php

class ViewLesson_C extends Controller {

	public static function doSomething() {
		$lessons = ViewLesson_M::listLesson();
	}

}

?>
