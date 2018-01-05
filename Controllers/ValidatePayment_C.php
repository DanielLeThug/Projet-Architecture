<?php

class ValidatePayment_C extends Controller {

    public static function doSomething() 
	{
        if(isset($_POST['validatepayment']))
		{
			$id_vir = $_POST['resp_fina'];
			$id_cours = $_POST['id'];
			ValidatePayment_M::updatePayment($id_vir, $id_cours);
			echo "<h3>Virement validé</h3>";
		}
    }
	
}
?>
