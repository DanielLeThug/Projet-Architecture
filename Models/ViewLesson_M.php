<?php

class ViewLesson_M extends Model {

	public static function listLesson() {
		return self::query('SELECT * FROM cours
					LEFT JOIN matieres ON matieres.ID = cours.ID_MATIERE
					LEFT JOIN dates_de_cours ON dates_de_cours.ID = cours.ID_DATE
					LEFT JOIN salles ON salles.ID = cours.ID_SALLE
					LEFT JOIN utilisateurs ON utilisateurs.ID = cours.ID_VACATAIRE');
	}

}

?>
