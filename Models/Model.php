<?php

class Model extends Database {

    public static function getEmail($email) {
        return self::query('SELECT email FROM utilisateurs WHERE email=:email', array(':email'=>$email));
    }

}

?>
