<?php

class Login extends Controller {

    public static function doSomething() {

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            if (self::query('SELECT email FROM utilisateurs WHERE email=:email', array(':email'=>$email))) {

                if (password_verify($mdp, self::query('SELECT mdp FROM utilisateurs WHERE email=:email', array(':email'=>$email))[0]['mdp'])) {
                    echo "Vous êtes connecté !";
                    $cstrong = True;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    $user_id = self::query('SELECT id FROM utilisateurs WHERE email=:email', array(':email'=>$email))[0]['id'];
                    // sha1 hash le token pour plus de sécurité
                    self::query('INSERT INTO cookies VALUES (null, :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
                    // cookie valide une semaine sur tout le site
                    setcookie("PAID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);

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
