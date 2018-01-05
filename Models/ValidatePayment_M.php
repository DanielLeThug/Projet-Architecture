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
	
	public static function updatePayment($id_vir, $id_mat, $id_date, $id_salle, $id_vac, $id_type_cours) {
		return self::query('UPDATE cours SET ID_VIREMENT=:ID_VIREMENT 
							WHERE ID_MATIERE=:ID_MAT, ID_DATE=:ID_DATE, ID_SALLE=:ID_SALLE, ID_VACATAIRE=:ID_VAC, ID_TYPE_DE_COURS:=ID_TYPE_COURS',
							array(':ID_VIREMENT'=>$id_vir,':ID_MAT'=>$id_mat,':ID_DATE'=>$id_date,':ID_SALLE'=>$id_salle,':ID_VAC'=>$id_vac,':ID_TYPE_COURS'=>$id_type_cours));
	}

}

?>
