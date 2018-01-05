<?php

class Upload_M extends Model {

    public static function addDocument($nom, $userid) {
        self::query('INSERT INTO documents_administratifs VALUES (null, :nom, :userid, null)', array(':nom'=>$nom, ':userid'=>$userid));
    }

}

?>
