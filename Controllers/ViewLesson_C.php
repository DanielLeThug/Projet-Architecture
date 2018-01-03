<?php

class ViewLesson_C extends Controller {

	public static function onLoad()
	{
		$lessons = ViewLesson_M::listLesson();
		$i = 0;
		if(isset($lessons))
		{
			foreach($lessons as $lesson)
			{
				$i++;
				echo "<tr><td>" . $i . "</td><td>" . $lesson[0] . "</td><td>" . $lesson[1] . "</td><td>" . $lesson[2] . "</td><td>" . $lesson[3] . "</td></tr>";
			}
		}
        require_once("./Views/ViewLesson2_V.php");
	}

    public static function doSomething() {
    }

}

?>
