<?php

class Model extends Database {

    public static function getEmail($email) {
        return self::query('SELECT email FROM utilisateurs WHERE email=:email', array(':email'=>$email));
    }

    public static function deleteCookie($token) {
        self::query('DELETE FROM cookies WHERE token=:token', array(':token'=>$token));
    }

}

?>
