<?php

class Upload_C extends Controller {

    public static function doSomething() {
        $userid = self::isLoggedIn();
        if ($userid) {
            if (isset($_POST['upload'])) {
                if ($_FILES['rib']['error'] == 0) {
                    $nom = "rib".$userid.strrchr($_FILES['rib']['name'], '.');
                    move_uploaded_file($_FILES['rib']['tmp_name'], "fichiers/".$nom);
                    Upload_M::addDocument($nom, $userid);
                    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Succès!</strong> Votre RIB a bien été uploadé.</div>";
                }
                if ($_FILES['fiche']['error'] == 0) {
                    $nom = "fiche".$userid.strrchr($_FILES['fiche']['name'], '.');
                    move_uploaded_file($_FILES['fiche']['tmp_name'], "fichiers/".$nom);
                    Upload_M::addDocument($nom, $userid);
                    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Succès!</strong> Votre fiche de renseignements a bien été uploadée.</div>";
                }
                if ($_FILES['attestation']['error'] == 0) {
                    $nom = "attestation".$userid.strrchr($_FILES['attestation']['name'], '.');
                    move_uploaded_file($_FILES['attestation']['tmp_name'], "fichiers/".$nom);
                    Upload_M::addDocument($nom, $userid);
                    echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Succès!</strong> Votre attestation employeur a bien été uploadée.</div>";
                }
            }
        } else {
            header("Location: index.php");
        }
    }

}

?>
