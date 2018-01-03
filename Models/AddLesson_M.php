<?php

class AddLesson_M extends Model {
	
	public static function listUser()
	{
		return self::query('SELECT * FROM utilisateurs');
	}
	
	/*
	public static function addLesson($intitule, $date, $professeur, $salle) {
        self::query('INSERT INTO dates_de_cours VALUES (NULL, :date, :heure', array(':date'=>$date, ':heure'=>$heure));
    }*/

}

?>
