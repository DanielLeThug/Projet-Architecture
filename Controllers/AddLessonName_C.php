<?php

class AddLessonName_C extends Controller {

    public static function doSomething() 
	{
        if (isset($_POST['addlessonname'])) 
		{
			$intitule = $_POST['intitule'];
			AddLessonName_M::addLessonName($intitule);
			echo "<h3>Cours ajouté.</h3>";
        }
    }
	
}
?>
