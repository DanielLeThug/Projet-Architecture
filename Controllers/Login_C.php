<?php

class Login_C extends Controller {

    public static function doSomething() {

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            if (Login_M::getEmail($email)) {

                if (password_verify($mdp, Login_M::getMdp($email))) {
                    //echo "Vous êtes connecté !";
                    $cstrong = True;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    $user_id = Login_M::getId($email);
                    // sha1 hash le token pour plus de sécurité
                    Login_M::addCookie(sha1($token), $user_id);
                    // cookie valide une semaine sur tout le site
                    setcookie("PAID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                    // deuxième cookie pour permettre à l'utilisateur de rester connecté
                    setcookie("PAID_", 1, time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                    header('Location: index.php');
                } else {
                    echo "Mot de passe incorrect.";
                }

            } else {
                echo "Cet utilisateur n'existe pas.";
            }
        }

    }

    public static function isLoggedIn() {

        if (isset($_COOKIE['PAID'])) {
            if (Login_M::checkCookie(sha1($_COOKIE['PAID']))) {
                $userid = Login_M::getCookieUserId(sha1($_COOKIE['PAID']));

                // Si le cookie de 3 jours a expiré on en créé un nouveau et on efface l'ancien
                if (isset($_COOKIE['PAID_'])) {
                    return $userid;
                } else {
                    $cstrong = True;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    Login_M::addCookie(sha1($token), $userid);
                    Login_M::deleteCookie(sha1($_COOKIE['PAID']));

                    setcookie("PAID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                    setcookie("PAID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                    return $userid;
                }
            }
        }

        return false;
    }

}

?>
