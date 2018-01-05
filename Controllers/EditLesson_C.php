<?php

class EditLesson_C extends Controller {

    public static function doSomething() {
        if(isset($_POST['edituser']))
        {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            if (strlen($nom) >= 3 && strlen($nom) <= 32 && strlen($prenom) >= 3 && strlen($prenom) <= 32)
            {
                if (preg_match('/[-a-zA-Z]+/', $nom) && preg_match('/[-a-zA-Z]+/', $prenom))
                {
                    if (filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        EditUser_M::editUser($id, $nom, $prenom, $email);
                        Header('Location: ./view_user');
                    }
                    else
                    {
                        echo "Adresse email invalide.";
                    }
                }
                else
                {
                    echo "Le nom ou le prénom contient des caractères illégaux.";
                }
            }
            else
            {
                echo "La taille du nom et du prénom doit être comprise entre 3 et 32 caractères.";
            }
        }
    }
}

?>
