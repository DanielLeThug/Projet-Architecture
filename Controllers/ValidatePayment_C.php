<?php

class ValidatePayment_C extends Controller {

    public static function doSomething() 
	{
        if(isset($_POST['validatepayment']))
		{
			$id_vir = $_POST['resp_fina'];
			$id_cours = $_POST['id'];
			ValidatePayment_M::updatePayment($id_vir, $id_cours);
			header('Location: ./view_lesson');
		}
    }
	
}
?>
