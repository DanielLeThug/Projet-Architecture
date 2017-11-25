<?php

class AddUser_M extends Model {

    public static function addUser($nom, $prenom, $email, $mdp) {
        self::query('INSERT INTO utilisateurs VALUES (null, null, :nom, :prenom, :email, :mdp)', array(':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email, ':mdp'=>password_hash($mdp, PASSWORD_BCRYPT)));
    }

}

?>
