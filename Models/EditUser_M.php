<?php

class EditUser_M extends Model {

	public static function getUser($id) {
		return self::query('SELECT * FROM utilisateurs WHERE ID=:ID',array(':ID'=>$id));
		
	}
	
	public static function deleteUser($id) {
		return self::query('DELETE FROM utilisateurs WHERE ID=:ID',array(':ID'=>$id));
	}
	
	public function editProfile($id,$uprofil){
		return self::query('UPDATE utilisateurs SET PROFIL=:PROFIL WHERE ID=:ID',array(':PROFIL'=>$uprofil, ':ID'=>$id));
	}
	
	public function changePassword($id,$upwd){
		return self::query('UPDATE utilisateurs SET MDP=:MDP WHERE ID=:ID',array(':MDP'=>$upwd, ':ID'=>$id)); 
	}
	 
	public function editUser($id,$nom,$prenom,$mail) {
		return self::query('UPDATE utilisateurs SET NOM=:NOM, PRENOM=:PRENOM, EMAIL=:EMAIL WHERE ID=:ID',array(':ID'=>$id,':NOM'=>$nom,':PRENOM'=>$prenom,':EMAIL'=>$mail)); 
		
	}
	
}

?>
