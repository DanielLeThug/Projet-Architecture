<?php

class Logout_C extends Controller {

    public static function doSomething() {
        if (isset($_COOKIE['PAID'])) {
            Logout_M::deleteCookie(sha1($_COOKIE['PAID']));
        }
		unset($_COOKIE['PAID']);
		unset($_COOKIE['PAID_']);
        setcookie('PAID', '1', time() - 3600, '/');
        setcookie('PAID_', '1', time() - 3600, '/');
		header('Location: index.php');
    }

}

?>
