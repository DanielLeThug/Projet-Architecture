<?php

class ValidatePayment_M extends Model {
	
	public static function listPayment() {
		return self::query('SELECT virements.ID As id,
							virements.DATE_V As date,
							virements.ID_RESPONSABLE_FINANCIER As respid,
							utilisateurs.NOM As nom,
							utilisateurs.PRENOM As prenom FROM virements
							LEFT JOIN utilisateurs ON utilisateurs.ID = virements.ID_RESPONSABLE_FINANCIER');
	}
	
	public static function updatePayment($id_vir, $id_cours) {
		return self::query('UPDATE cours SET ID_VIREMENT=:ID_VIR, EFFECTUE=1
							WHERE ID=:ID_COURS',
							array(':ID_VIR'=>$id_vir,':ID_COURS'=>$id_cours));
	}

}

?>
