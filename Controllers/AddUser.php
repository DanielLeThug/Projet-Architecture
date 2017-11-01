<?php

class AddUser extends Controller {

    public static function doSomething() {
        if (isset($_POST['adduser'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            if (!self::query('SELECT email FROM utilisateurs WHERE email=:email', array(':email'=>$email))) {

                if (strlen($nom) >= 3 && strlen($nom) <= 32 && strlen($prenom) >= 3 && strlen($prenom) <= 32) {

                    if (preg_match('/[-a-zA-Z]+/', $nom) && preg_match('/[-a-zA-Z]+/', $prenom)) {

                        if (strlen($mdp) >= 6 && strlen($mdp) <= 60) {

                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                                self::query('INSERT INTO utilisateurs VALUES (null, null, :nom, :prenom, :email, :mdp)', array(':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email, ':mdp'=>password_hash($mdp, PASSWORD_BCRYPT)));
                                echo "Utilisateur ajouté.";
                            } else {
                                echo "Adresse email invalide.";
                            }
                        } else {
                            echo "La taille du mot de passe doit être comprise entre 6 et 60 caractères.";
                        }
                    } else {
                        echo "Le nom ou le prénom contient des caractères illégaux.";
                    }
                } else {
                    echo "La taille du nom et du prénom doit être comprise entre 3 et 32 caractères.";
                }

            } else {
                echo 'Cette adresse email est déjà utilisé.';
            }
        }
    }

}

?>
