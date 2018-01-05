<?php

class EditUser_M extends Model {

    public static function getLesson($id) {
        return self::query('SELECT * FROM cours WHERE ID = :ID',array(':ID'=>$id));
    }

    public static function deleteLesson($id) {
		return self::query('DELETE FROM cours WHERE ID=:ID',array(':ID'=>$id));
	}

}

?>
