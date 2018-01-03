<?php

class ViewLesson_M extends Model {

	public static function listUser() {
		self::query('SELECT * FROM utilisateurs');
	}

}

?>
