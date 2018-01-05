<?php

class ViewLesson_M extends Model {

	public static function listLesson() {
		return self::query("SELECT matieres.LIBELLÉ AS Intitulé, 
							cours.ID_MATIERE As id_mat,
							cours.ID_SALLE As id_salle,
							cours.ID_VACATAIRE As id_vac,
							cours.ID_TYPE_DE_COURS As id_type_cours,
							cours.ID_DATE As id_date,
							types_de_cours.LIBELLÉ As Type,
							cours.EFFECTUE As Virement,
							CONCAT(dates_de_cours.DATE_C, ' ' ,dates_de_cours.HEURE) As Date, 
							CONCAT(UPPER(utilisateurs.NOM), ' ' ,utilisateurs.PRENOM) As Professeur, 
							CONCAT(salles.LIBELLÉ, ' Bât ', batiments.LIBELLÉ) As Salle FROM cours 
							LEFT JOIN matieres ON matieres.ID = cours.ID_MATIERE 
							LEFT JOIN types_de_cours ON types_de_cours.ID = cours.ID_TYPE_DE_COURS 
							LEFT JOIN dates_de_cours ON dates_de_cours.ID = cours.ID_DATE 
							LEFT JOIN salles ON salles.ID = cours.ID_SALLE 
							LEFT JOIN utilisateurs ON utilisateurs.ID = cours.ID_VACATAIRE 
							LEFT JOIN batiments ON batiments.ID = salles.ID_BATIMENT");
	}

}

?>
