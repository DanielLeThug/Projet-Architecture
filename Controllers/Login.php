<?php

class Login extends Controller {
	private id2 = "prout@mdr";
	private pwd2 = "kek";
	public static function connexion() {
		if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pwd']) && !empty($_POST['pwd']))
		{
			if((id == id2) && (pwd == pwd2))
			{
				header('Location: ./Logout.php');
			}
		}
		
	}

}

?>
