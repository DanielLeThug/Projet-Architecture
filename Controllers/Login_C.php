<?php

class Login_C extends Controller {

    public static function doSomething() {

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            if (Login_M::getEmail($email)) {

                if (password_verify($mdp, Login_M::getMdp($email))) {
                    echo "Vous êtes connecté !";
                    $cstrong = True;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    $user_id = Login_M::getId($email);
                    // sha1 hash le token pour plus de sécurité
                    Login_M::addCookie($token, $user_id);
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
