<?php

class AddPayment_C extends Controller {

    public static function doSomething() 
	{
        if (isset($_POST['addpayment'])) 
		{
            $date = $_POST['date'];
			$id_user = self::isLoggedIn();
			AddPayment_M::addPayment($id_user, $date);
			echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Succès!</strong> Virement ajouté.</div>";
        }
    }
	
}
?>
