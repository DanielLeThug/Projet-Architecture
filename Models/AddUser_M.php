<?php

class AddUser_M extends Model {

    public static function addUser($profil, $nom, $prenom, $email, $mdp) {
        self::query('INSERT INTO utilisateurs VALUES (null, :profil, :nom, :prenom, :email, :mdp)', array(':profil'=>$profil, ':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email, ':mdp'=>password_hash($mdp, PASSWORD_BCRYPT)));
    }

}

?>
