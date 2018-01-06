<?php

class AddPayment_M extends Model {
	
	public static function addPayment($id, $date)
	{
		self::query('INSERT INTO virements VALUES (NULL, :DATE_V, :ID_RESPONSABLE_FINANCIER)', array(':DATE_V'=>$date, ':ID_RESPONSABLE_FINANCIER'=>$id));
    }

}

?>
