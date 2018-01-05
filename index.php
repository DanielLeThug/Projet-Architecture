<?php
require_once('Routes.php');

function __autoload($class_name) {
    if (file_exists('./classes/'.$class_name.'.php')) {
        require_once './classes/'.$class_name.'.php';
    } else if (file_exists('./Controllers/'.$class_name.'.php')) {
        require_once './Controllers/'.$class_name.'.php';
    } else if (file_exists('./Models/'.$class_name.'.php')) {
        require_once './Models/'.$class_name.'.php';
    }

}
/*
if (Controller::isLoggedIn()) {
    echo "Connecté ! ";
    echo Controller::isLoggedIn();
} else {
    echo "Pas Connecté !";
}*/

if (!in_array($_GET['url'], Route::$validRoutes)) {
	require_once("./Views/Header_V.php");
	require_once("./Views/Bandeau_V.php");
	
	if (Controller::isLoggedIn()) {
		require_once("./Views/Bandeau2C_V.php");
	} else {
		require_once("./Views/Bandeau2DC_V.php");
	}
    require_once("./Views/404_V.php");
}
?>
