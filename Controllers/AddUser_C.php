<?php

class AddUser_C extends Controller {

    public static function doSomething() {
        if (isset($_POST['adduser'])) {
			$profil = $_POST['profil'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            if (!AddUser_M::getEmail($email)) {

                if (strlen($nom) >= 3 && strlen($nom) <= 32 && strlen($prenom) >= 3 && strlen($prenom) <= 32) {

                    if (preg_match('/[-a-zA-Z]+/', $nom) && preg_match('/[-a-zA-Z]+/', $prenom)) {

                        if (strlen($mdp) >= 6 && strlen($mdp) <= 60) {

                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                                AddUser_M::addUser($profil, $nom, $prenom, $email, $mdp);
                                echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Succès!</strong> Utilisateur ajouté.</div>";
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
