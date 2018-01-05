<?php

class ViewUser_C extends Controller {

    public static function doSomething() {
		$users = ViewUser_M::listUser();
    }

}

?>
