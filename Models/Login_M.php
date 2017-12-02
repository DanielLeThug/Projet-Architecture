<?php

class Login_M extends Model {

    public static function getMdp($email) {
        return self::query('SELECT mdp FROM utilisateurs WHERE email=:email', array(':email'=>$email))[0]['mdp'];
    }

    public static function getId($email) {
        return self::query('SELECT id FROM utilisateurs WHERE email=:email', array(':email'=>$email))[0]['id'];
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

}

?>
