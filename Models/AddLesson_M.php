<?php

class AddLesson_M extends Model {
	
	public static function listUser()
	{
		return self::query('SELECT * FROM utilisateurs');
	}
	
	public static function listDiscipline()
	{
		return self::query('SELECT * FROM matieres');
	}
	
	public static function listSalle()
	{
		return self::query('SELECT * FROM salles
							INNER JOIN batiments ON salles.ID_BATIMENT = batiments.ID');
	}
	
	public static function addLesson($matiere, $date, $heure , $professeur, $salle)
	{
        self::query('INSERT INTO dates_de_cours VALUES (NULL, :date, :heure)', array(':date'=>$date, ':heure'=>$heure));
		$id_date = self::query('SELECT ID FROM dates_de_cours WHERE DATE_C = :date AND HEURE = :heure', array(':date'=>$date, ':heure'=>$heure));
		self::query('INSERT INTO cours VALUES (:matiere, :id_date, :professeur, :salle)', array(':matiere'=>$matiere, ':id_date'=>$id_date[0], ':professeur'=>$professeur, ':salle'=>$salle));
    }

}

?>
