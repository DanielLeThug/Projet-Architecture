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
	
	public static function addLesson($matiere, $date, $heure , $professeur, $salle, $type_cours)
	{    
		$id_date = self::query('SELECT ID FROM dates_de_cours WHERE DATE_C = :date AND HEURE = :heure', array(':date'=>$date, ':heure'=>$heure));
		if(!isset($id_date))
			self::query('INSERT INTO dates_de_cours VALUES (NULL, :date, :heure)', array(':date'=>$date, ':heure'=>$heure));
		self::query('INSERT INTO cours VALUES (:ID_MATIERE, :ID_DATE, :ID_SALLE, :ID_VACATAIRE, :ID_TYPE_DE_COURS)', array(':ID_MATIERE'=>$matiere, ':ID_DATE'=>$id_date[0], ':ID_SALLE'=>$salle,':ID_VACATAIRE'=>$professeur,':ID_TYPE_DE_COURS'=>$type_cours));
    }

}

?>
