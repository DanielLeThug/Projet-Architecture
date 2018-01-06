<?php

class EditLesson_C extends Controller {

    public static function doSomething() {
        if(isset($_POST['editlesson']))
        {
            $id = $_POST['id'];
            $matiere = $_POST['matiere'];
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $professeur = $_POST['professeur'];
            $salle = $_POST['salle'];
            $type_cours = $_POST['type_cours'];

            EditLesson_M::editLesson($id, $matiere, $date, $heure, $professeur, $salle, $type_cours);
            Header('Location: ./view_lesson');
        }
    }
}

?>
