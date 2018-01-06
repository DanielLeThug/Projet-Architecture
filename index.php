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
	$userid = Controller::isLoggedIn();

	if ($userid)
	{
		$GLOBALS['profil'] = Model::getProfil($userid);
		if (isset($_COOKIE['PAID_']))
		{
			require_once("./Views/Bandeau2C_V.php");
		}
		else
		{
			require_once("./Views/Bandeau2DC_V.php");
		}
	}
    require_once("./Views/404_V.php");
}
else
{
	if(mb_strimwidth($_GET['url'], 0, 39) == "localhost/Projet-Architecture/fichiers/")
	{
		require_once("./fichiers/" . mb_strimwidth($_GET['url'], 39, strlen($_GET['url'])));
	}
}
?>
