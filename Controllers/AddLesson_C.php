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
			AddLesson_M::addLesson($matiere, $date, $heure, $professeur, $salle);
			echo "Cours ajouté.";
        }
    }
	
}
?>
