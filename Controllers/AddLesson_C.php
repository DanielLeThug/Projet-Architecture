<?php

class AddLesson_C extends Controller {

	public static function onLoad()
	{
		$users = AddLesson_M::listUser();
		foreach($users as $user)
		{
			echo "<option value=" . $user[0] . ">" . $user[3] . " " . $user[2] . "</option>";
		}
        require_once("./Views/AddLesson2_V.php");
	}

    public static function doSomething() {
		/* PROBLEME BDD
        if (isset($_POST['addlesson'])) {
			$intitule = $_POST['intitule']
            $nom = $_POST['date'];
            $prenom = $_POST['professeur'];
            $email = $_POST['salle'];
			if (strlen($intitule) >= 3 && strlen($intitule) <= 32) {
				AddLesson_M::addLesson($intitule, $date, $professeur, $salle);
				echo "Cours ajouté.";
			} else {
				echo "La taille du nom du cours doit être comprise entre 3 et 32 caractères.";
			}
        }*/
    }

}

?>
