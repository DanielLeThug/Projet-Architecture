<?php

class ValidateDocuments_M extends Model {

    public static function listDocuments() {
        return self::query("SELECT documents_administratifs.ID AS Id, CONCAT(utilisateurs.PRENOM, ' ', utilisateurs.NOM) AS User, LIBELLÉ AS Filename FROM documents_administratifs JOIN utilisateurs ON utilisateurs.ID = documents_administratifs.ID_VACATAIRE WHERE ID_RESPONSABLE_ADMINISTRATIF IS NULL");
    }

    public static function validateDoc($id, $resp) {
        self::query('UPDATE documents_administratifs SET ID_RESPONSABLE_ADMINISTRATIF=:ID_RESPONSABLE_ADMINISTRATIF WHERE ID=:ID', array(':ID_RESPONSABLE_ADMINISTRATIF'=>$resp,':ID'=>$id));
    }

}

?>
