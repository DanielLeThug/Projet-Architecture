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
			echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Succès!</strong> Cours ajouté</div>";
        }
    }
	
}
?>
