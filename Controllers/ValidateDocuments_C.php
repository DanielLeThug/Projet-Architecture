<?php

class ValidateDocuments_C extends Controller {

    public static function doSomething()
	{
        if(isset($_GET['id']))
		{
			ValidateDocuments_M::validateDoc($_GET['id'], self::isLoggedIn());
			header('Location: validate_documents');
		}
    }

}
?>
