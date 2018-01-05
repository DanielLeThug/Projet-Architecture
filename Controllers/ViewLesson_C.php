<?php

class ViewLesson_C extends Controller {

	public static function onLoad()
	{
		$lessons = ViewLesson_M::listLesson();
		$i = 0;
		foreach($lessons as $lesson)
		{
			$i++;
			echo "<tr><td>" . $i . "</td><td>" . $lesson['Intitulé'] . "</td><td>" . $lesson['Date'] . "</td><td>" . $lesson['Professeur'] . "</td><td>" . $lesson['Salle'] . "</td></tr>";
		}
		require_once("./Views/ViewLesson2_V.php");
	}

	public static function doSomething() {
	}

}

?>
