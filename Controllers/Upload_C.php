<?php

class Upload_C extends Controller {

    public static function doSomething() {
        if (isset($_POST['upload'])) {
            if ($_FILES['rib']['error'] > 0) {
                echo "Erreur lors du transfert";
            }
        }
    }

}

?>
