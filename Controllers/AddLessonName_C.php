<?php

class AddLessonName_C extends Controller {

    public static function doSomething() 
	{
        if (isset($_POST['addlessonname'])) 
		{
			$intitule = $_POST['intitule'];
			AddLessonName_M::addLessonName($intitule);
			echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Succès!</strong> Matière ajoutée.</div>";
        }
    }
	
}
?>

