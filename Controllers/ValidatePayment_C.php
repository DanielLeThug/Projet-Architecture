<?php

class ValidatePayment_C extends Controller {

    public static function doSomething() 
	{
        if(isset($_POST['validatepayment']))
		{
			$vir_id = $_POST['resp_fina'];
			$id_cours = $_POST['id'];
			ValidatePayment_M::updatePayment($vir_id, $id_cours);
			echo "<h3>Virement validé</h3>";
		}
    }
	
}
?>
