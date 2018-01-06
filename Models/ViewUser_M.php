<?php

class ViewUser_M extends Model {

	public static function listUser() {
		return self::query('SELECT * FROM utilisateurs');
	}

	public static function deleteUser($id) {
		self::query('DELETE FROM utilisateurs WHERE ID=:ID',array(':ID'=>$id));
	}
}

?>
