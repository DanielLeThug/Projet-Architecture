<?php

class AddPayment_C extends Controller {

    public static function doSomething() 
	{
        if (isset($_POST['addpayment'])) 
		{
            $date = $_POST['date'];
			$id_user = self::isLoggedIn();
			AddPayment_M::addPayment($id_user, $date);
			echo "<h3>Virement ajouté.</h3>";
        }
    }
	
}
?>
