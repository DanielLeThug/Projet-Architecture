<?php

class ValidatePayment_M extends Model {
	
	public static function listResp() {
		return self::query('SELECT utilisateurs.ID As user
							utilisateurs.NOM As nom
							utilisateurs.PRENOM As prenom FROM utilisateurs
							WHERE utilisateurs.PROFIL = 5 OR utilisateurs.PROFIL = 1');
	}

}

?>
