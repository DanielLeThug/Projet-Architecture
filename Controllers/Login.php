<?php

class Login extends Controller {

  public static function doSomething() {

    if (isset($_POST['login'])) {
      $email = $_POST['email'];
      $mdp = $_POST['mdp'];

      if (self::query('SELECT email FROM utilisateurs WHERE email=:email', array(':email'=>$email))) {

        if (password_verify($mdp, self::query('SELECT mdp FROM utilisateurs WHERE email=:email', array(':email'=>$email))[0]['mdp'])) {
          echo "Vous êtes connecté !";
        } else {
          echo "Mot de passe incorrect.";
        }

      } else {
        echo "Cet utilisateur n'existe pas.";
      }
    }

  }

}

?>
