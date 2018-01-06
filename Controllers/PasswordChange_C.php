<?php

class PasswordChange_C extends Controller {
	
    public static function doSomething() {
		if(isset($_POST['passwordchange']))
		{
			$id = self::isLoggedIn();
			$mdp = $_POST['mdp'];
			if (strlen($mdp) >= 6 && strlen($mdp) <= 60) {
				PasswordChange_M::changePassword($id, $mdp);
				Header('Location: ./Index.php');
			}
			else
			{
				echo "La taille du mot de passe doit être comprise entre 6 et 60 caractères.";
			}
		}
	}
}

?>
