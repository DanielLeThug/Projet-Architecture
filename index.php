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

if (Login_C::isLoggedIn()) {
    echo "Connecté ! ";
    echo Login_C::isLoggedIn();
} else {
    echo "Pas Connecté !";
}

if (!in_array($_GET['url'], Route::$validRoutes)) {
    require_once("./Views/404_V.php");
}
?>
