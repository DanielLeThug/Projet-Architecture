<?php

class EditLesson_M extends Model {

    public static function getLesson($id) {
        return self::query("SELECT matieres.LIBELLÉ, dates_de_cours.DATE_C, dates_de_cours.HEURE, CONCAT(utilisateurs.PRENOM, ' ', utilisateurs.NOM), CONCAT(salles.LIBELLÉ, ', batiment ', batiments.LIBELLÉ), types_de_cours.LIBELLÉ FROM cours JOIN matieres ON cours.ID_MATIERE = matieres.ID JOIN dates_de_cours ON cours.ID_DATE = dates_de_cours.ID JOIN salles ON cours.ID_SALLE = salles.ID JOIN utilisateurs ON cours.ID_VACATAIRE = utilisateurs.ID JOIN types_de_cours ON cours.ID_TYPE_DE_COURS = types_de_cours.ID JOIN batiments ON salles.ID_BATIMENT = batiments.ID WHERE cours.ID = :ID", array(':ID'=>$id))[0];
    }

    public static function deleteLesson($id) {
        return self::query('DELETE FROM cours WHERE ID=:ID', array(':ID'=>$id));
    }

    public static function editLesson($id, $matiere, $date, $heure, $professeur, $salle, $type_cours) {
        $id_date = self::query('SELECT ID FROM dates_de_cours WHERE DATE_C = :date AND HEURE = :heure', array(':date'=>$date, ':heure'=>$heure));
		if($id_date == NULL)
		{
			self::query('INSERT INTO dates_de_cours VALUES (NULL, :date, :heure)', array(':date'=>$date, ':heure'=>$heure));
			$id_date = self::query('SELECT ID FROM dates_de_cours WHERE DATE_C = :date AND HEURE = :heure', array(':date'=>$date, ':heure'=>$heure));
		}
        self::query('UPDATE cours SET ID_MATIERE=:ID_MATIERE, ID_DATE=:ID_DATE, ID_SALLE=:ID_SALLE, ID_VACATAIRE=:ID_VACATAIRE, ID_TYPE_DE_COURS=:ID_TYPE_DE_COURS WHERE ID=:ID', array(':ID_MATIERE'=>$matiere, ':ID_DATE'=>$id_date[0][0], ':ID_SALLE'=>$salle, ':ID_VACATAIRE'=>$professeur, ':ID_TYPE_DE_COURS'=>$type_cours, ':ID'=>$id));
    }

}

?>
