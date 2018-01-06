<?php

class EditUser_M extends Model {

	public static function getUser($id) {
		return self::query('SELECT * FROM utilisateurs WHERE ID = :ID',array(':ID'=>$id));

	}

	public function editProfile($id, $uprofil){
		self::query('UPDATE utilisateurs SET PROFIL=:PROFIL WHERE ID=:ID',array(':PROFIL'=>$uprofil, ':ID'=>$id));
	}

	public function changePassword($id, $upwd){
		self::query('UPDATE utilisateurs SET MDP=:MDP WHERE ID=:ID',array(':MDP'=>$upwd, ':ID'=>$id));
	}

	public function editUser($id, $profil, $nom, $prenom, $mail) {
		self::query('UPDATE utilisateurs SET PROFIL=:PROFIL, NOM=:NOM, PRENOM=:PRENOM, EMAIL=:EMAIL WHERE ID=:ID',array(':ID'=>$id, ':PROFIL'=>$profil, ':NOM'=>$nom, ':PRENOM'=>$prenom, ':EMAIL'=>$mail));
	}

}

?>
