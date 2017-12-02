<?php

class Model extends Database {

    public static function getEmail($email) {
        return self::query('SELECT email FROM utilisateurs WHERE email=:email', array(':email'=>$email));
    }

    public static function deleteCookie($token) {
        self::query('DELETE FROM cookies WHERE token=:token', array(':token'=>$token));
    }

    public static function addCookie($token, $user_id) {
        self::query('INSERT INTO cookies VALUES (null, :token, :user_id)', array(':token'=>$token, ':user_id'=>$user_id));
    }

    public static function checkCookie($token) {
        return self::query('SELECT user_id FROM cookies WHERE token=:token', array(':token'=>$token));
    }

    public static function getCookieUserId($token) {
        return self::query('SELECT user_id FROM cookies WHERE token=:token', array(':token'=>$token))[0]['user_id'];
    }

    public static function getProfil($user_id) {
        return self::query('SELECT profil FROM utilisateurs WHERE id=:user_id', array(':user_id'=>$user_id));
    }

}

?>
