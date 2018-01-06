<?php

class ValidateDocuments_M extends Model {

    public static function listDocuments() {
        return self::query("SELECT documents_administratifs.ID AS Id, CONCAT(utilisateurs.PRENOM, ' ', utilisateurs.NOM) AS User, LIBELLÉ AS Filename FROM documents_administratifs JOIN utilisateurs ON utilisateurs.ID = documents_administratifs.ID_VACATAIRE WHERE ID_RESPONSABLE_ADMINISTRATIF IS NULL");
    }

    public static function updatePayment($id_vir, $id_cours) {
        self::query('UPDATE cours SET ID_VIREMENT=:ID_VIR, EFFECTUE=1 WHERE ID=:ID_COURS', array(':ID_VIR'=>$id_vir,':ID_COURS'=>$id_cours));
    }

}

?>
