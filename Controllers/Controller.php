<?php

class Controller {

    public static function CreatePrivateView($viewName) {

        $userid = self::isLoggedIn();

        if ($userid) {

            $profil = Model::getProfil($userid);
            if ($profil) {
                // Si l'utilisateur est un administrateur
                if ($profil[0]['profil'] == 1) {
					require_once("./Views/Header_V.php");
					require_once("./Views/Bandeau_V.php");
					if (!isset($_COOKIE['PAID_']))
					{
						require_once("./Views/Bandeau2DC_V.php");
					}
					if (isset($_COOKIE['PAID_']))
					{
						require_once("./Views/Bandeau2C_V.php");
					}
                    require_once("./Views/$viewName.php");
					static::onLoad();
					require_once("./Views/Footer_V.php");
                    static::doSomething();
                } else {
                    header("Location: index.php");
                }
            }
        } else {
            header("Location: index.php");
        }
    }

    public static function CreateView($viewName) {
		require_once("./Views/Header_V.php");
		require_once("./Views/Bandeau_V.php");
		if (!isset($_COOKIE['PAID_']))
		{
			require_once("./Views/Bandeau2DC_V.php");
		}
		if (isset($_COOKIE['PAID_']))
		{
			require_once("./Views/Bandeau2C_V.php");
		}
        require_once("./Views/$viewName.php");
        static::onLoad();
		require_once("./Views/Footer_V.php");
        static::doSomething();
    }

    public static function isLoggedIn() {

        if (isset($_COOKIE['PAID'])) {
            if (Model::checkCookie(sha1($_COOKIE['PAID']))) {
                $userid = Model::getCookieUserId(sha1($_COOKIE['PAID']));

                // Si le cookie de 3 jours a expiré on en créé un nouveau et on efface l'ancien
                if (isset($_COOKIE['PAID_'])) {
                    return $userid;
                } else {
                    $cstrong = True;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    Model::addCookie(sha1($token), $userid);
                    Model::deleteCookie(sha1($_COOKIE['PAID']));

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
