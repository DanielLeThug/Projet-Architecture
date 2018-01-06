<?php

class Controller {

    public static function CreatePrivateView($viewName) {

        $userid = self::isLoggedIn();

        if ($userid) {

            $GLOBALS['profil'] = Model::getProfil($userid);
			require_once("./Views/Header_V.php");
			require_once("./Views/Bandeau_V.php");
			if (isset($_COOKIE['PAID_']))
			{
				require_once("./Views/Bandeau2C_V.php");
			}
			else
			{
				require_once("./Views/Bandeau2DC_V.php");
			}
			static::doSomething();
			require_once("./Views/$viewName.php");
			require_once("./Views/Footer_V.php");
        } else {
            header("Location: index.php");
        }
    }
	
	public static function CreateAdminView($viewName) {

        $userid = self::isLoggedIn();

        if ($userid) {

            $GLOBALS['profil'] = Model::getProfil($userid);
            if ($GLOBALS['profil']) {
                // Si l'utilisateur est un administrateur
                if ($GLOBALS['profil'][0]['profil'] == 1) {
					require_once("./Views/Header_V.php");
					require_once("./Views/Bandeau_V.php");
					if (isset($_COOKIE['PAID_']))
					{
						require_once("./Views/Bandeau2C_V.php");
					}
					else
					{
						require_once("./Views/Bandeau2DC_V.php");
					}
                    static::doSomething();
                    require_once("./Views/$viewName.php");
					require_once("./Views/Footer_V.php");
                } else {
                    header("Location: index.php");
                }
            }
        } else {
            header("Location: index.php");
        }
    }
	
	public static function CreateFinancialView($viewName) {

        $userid = self::isLoggedIn();

        if ($userid) {

            $GLOBALS['profil'] = Model::getProfil($userid);
            if ($GLOBALS['profil']) {
                // Si l'utilisateur est un administrateur, un responsable financier ou un contrôle de gestion
                if ($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 2 || $GLOBALS['profil'][0]['profil'] == 5) {
					require_once("./Views/Header_V.php");
					require_once("./Views/Bandeau_V.php");
					if (isset($_COOKIE['PAID_']))
					{
						require_once("./Views/Bandeau2C_V.php");
					}
					else
					{
						require_once("./Views/Bandeau2DC_V.php");
					}
                    static::doSomething();
                    require_once("./Views/$viewName.php");
					require_once("./Views/Footer_V.php");
                } else {
                    header("Location: index.php");
                }
            }
        } else {
            header("Location: index.php");
        }
    }
	
	public static function CreateExecutiveView($viewName) {

        $userid = self::isLoggedIn();

        if ($userid) {

            $GLOBALS['profil'] = Model::getProfil($userid);
            if ($GLOBALS['profil']) {
                // Si l'utilisateur est un administrateur, un responsable financier ou un contrôle de gestion
                if ($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 4) {
					require_once("./Views/Header_V.php");
					require_once("./Views/Bandeau_V.php");
					if (isset($_COOKIE['PAID_']))
					{
						require_once("./Views/Bandeau2C_V.php");
					}
					else
					{
						require_once("./Views/Bandeau2DC_V.php");
					}
                    static::doSomething();
                    require_once("./Views/$viewName.php");
					require_once("./Views/Footer_V.php");
                } else {
                    header("Location: index.php");
                }
            }
        } else {
            header("Location: index.php");
        }
    }
	
	public static function CreateFormationView($viewName) {

        $userid = self::isLoggedIn();

        if ($userid) {

			$GLOBALS['profil'] = Model::getProfil($userid);
            if ($GLOBALS['profil']) {
                // Si l'utilisateur est un administrateur, un responsable financier ou un contrôle de gestion
                if ($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 2 || $GLOBALS['profil'][0]['profil'] == 3 || $GLOBALS['profil'][0]['profil'] == 4) {
					require_once("./Views/Header_V.php");
					require_once("./Views/Bandeau_V.php");
					if (isset($_COOKIE['PAID_']))
					{
						require_once("./Views/Bandeau2C_V.php");
					}
					else
					{
						require_once("./Views/Bandeau2DC_V.php");
					}
                    static::doSomething();
                    require_once("./Views/$viewName.php");
					require_once("./Views/Footer_V.php");
                } else {
                    header("Location: index.php");
                }
            }
        } else {
            header("Location: index.php");
        }
    }
	
	public static function CreateDownloadView($viewName) {
		$userid = self::isLoggedIn();

        if ($userid) {
			require_once("./Views/$viewName.php");
        } else {
            header("Location: index.php");
        }
    }

    public static function CreateView($viewName) {
		require_once("./Views/Header_V.php");
		require_once("./Views/Bandeau_V.php");
        $userid = self::isLoggedIn();
		$GLOBALS['profil'] = Model::getProfil($userid);
		if (isset($_COOKIE['PAID_']))
		{
			require_once("./Views/Bandeau2C_V.php");
		}
		else
		{
			require_once("./Views/Bandeau2DC_V.php");
		}
        static::doSomething();
        require_once("./Views/$viewName.php");
		require_once("./Views/Footer_V.php");
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
