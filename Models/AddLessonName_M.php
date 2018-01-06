<?php

class AddLessonName_M extends Model {
	
	public static function addLessonName($intitule)
	{
		self::query('INSERT INTO matieres VALUES (NULL, :LIBELLE)', array(':LIBELLE'=>$intitule));
    }

}

?>
