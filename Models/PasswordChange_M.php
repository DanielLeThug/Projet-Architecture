<?php

class PasswordChange_M extends Model {
	
	public static function changePassword($id, $pwd)
	{
		self::query('UPDATE utilisateurs SET MDP=:MDP WHERE ID=:ID', array(':MDP'=>password_hash($pwd, PASSWORD_BCRYPT), ':ID'=>$id));
    }

}

?>
