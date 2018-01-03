<?php

class AddLesson_C extends Controller {

	public static function onLoad()
	{
		$disciplines = AddLesson_M::listDiscipline();
		foreach($disciplines as $discipline)
		{
			echo "<option value=" . $discipline[0] . ">" . $discipline[1] . "</option>";
		}
        require_once("./Views/AddLesson2_V.php");
		print_r($disciplines);
		$users = AddLesson_M::listUser();
		foreach($users as $user)
		{
			echo "<option value=" . $user[0] . ">" . $user[3] . " " . $user[2] . "</option>";
		}
        require_once("./Views/AddLesson3_V.php");
		$salles = AddLesson_M::listSalle();
		foreach($salles as $salle)
		{
			echo "<option value=" . $salle[0] . ">" . $salle[1] . ", batiment " . $salle[4] . "</option>";
		}
        require_once("./Views/AddLesson4_V.php");
	}

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
