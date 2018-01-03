<?php

class ViewUser_C extends Controller {

	public static function onLoad()
	{
		$users = ViewUser_M::listUser();
		foreach($users as $user)
		{
			echo "<tr><td>" . $user[0] . "</td><td>" . $user[1] . "</td><td>" . $user[2] . "</td><td>" . $user[3] . "</td><td>" . $user[4] . "</td></tr>";
		}
        require_once("./Views/ViewUser2_V.php");
	}

    public static function doSomething() {
    }

}

?>
