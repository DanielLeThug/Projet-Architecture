<?php

class EditLesson_M extends Model {

    public static function getLesson($id) {
        return self::query("SELECT matieres.LIBELLÉ, dates_de_cours.DATE_C, dates_de_cours.HEURE, CONCAT(utilisateurs.PRENOM, ' ', utilisateurs.NOM), CONCAT(salles.LIBELLÉ, ', batiment ', batiments.LIBELLÉ), types_de_cours.LIBELLÉ FROM cours JOIN matieres ON cours.ID_MATIERE = matieres.ID JOIN dates_de_cours ON cours.ID_DATE = dates_de_cours.ID JOIN salles ON cours.ID_SALLE = salles.ID JOIN utilisateurs ON cours.ID_VACATAIRE = utilisateurs.ID JOIN types_de_cours ON cours.ID_TYPE_DE_COURS = types_de_cours.ID JOIN batiments ON salles.ID_BATIMENT = batiments.ID WHERE cours.ID = :ID", array(':ID'=>$id))[0];
    }

    public static function deleteLesson($id) {
        return self::query('DELETE FROM cours WHERE ID=:ID', array(':ID'=>$id));
    }

    public static function editLesson($id, $matiere, $date, $heure, $professeur, $salle, $type_cours) {
        self::query('UPDATE cours SET ID_MATIERE=:ID_MATIERE WHERE ID_DATE=:ID_DATE',array(':PROFIL'=>$uprofil, ':ID'=>$id));
    }

}

?>
