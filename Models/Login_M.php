<?php

class Login_M extends Model {

    public static function getMdp($email) {
        return self::query('SELECT mdp FROM utilisateurs WHERE email=:email', array(':email'=>$email))[0]['mdp'];
    }

    public static function getId($email) {
        return self::query('SELECT id FROM utilisateurs WHERE email=:email', array(':email'=>$email))[0]['id'];
    }

}

?>
