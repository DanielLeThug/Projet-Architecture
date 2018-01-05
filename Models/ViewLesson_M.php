<?php

class ViewLesson_M extends Model {

	public static function listLesson() {
		return self::query("SELECT matieres.LIBELLÉ AS Intitulé, CONCAT(dates_de_cours.DATE_C, ' ' ,dates_de_cours.HEURE) As Date, CONCAT(UPPER(utilisateurs.NOM), ' ' ,utilisateurs.PRENOM) As Professeur, CONCAT(salles.LIBELLÉ, ' Bât ', batiments.LIBELLÉ) As Salle FROM cours LEFT JOIN matieres ON matieres.ID = cours.ID_MATIERE LEFT JOIN dates_de_cours ON dates_de_cours.ID = cours.ID_DATE LEFT JOIN salles ON salles.ID = cours.ID_SALLE LEFT JOIN utilisateurs ON utilisateurs.ID = cours.ID_VACATAIRE LEFT JOIN batiments ON batiments.ID = salles.ID_BATIMENT");
	}

}

?>
