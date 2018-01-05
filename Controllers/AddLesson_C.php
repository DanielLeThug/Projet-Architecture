<?php

class AddLesson_C extends Controller {

    public static function doSomething() 
	{
        if (isset($_POST['addlesson'])) 
		{
			$matiere = $_POST['matiere'];
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $professeur = $_POST['professeur'];
            $salle = $_POST['salle'];
			$typecours = $_POST['type_cours'];
			AddLesson_M::addLesson($matiere, $date, $heure, $professeur, $salle, $typecours);
			echo "<h3>Cours ajouté.</h3>";
        }
    }
	
}
?>
