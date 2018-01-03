<?php

class ViewUser_M extends Model {

	public static function listUser() {
		return self::query('SELECT * FROM utilisateurs');
	}

}

?>
