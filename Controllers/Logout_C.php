<?php

class Logout_C extends Controller {

    public static function doSomething() {
        if (isset($_COOKIE['PAID'])) {
            Logout_M::deleteCookie(sha1($_COOKIE['PAID']));
        }
        setcookie('PAID', '1', time() - 3600);
        setcookie('PAID_', '1', time() - 3600);
    }

}

?>
