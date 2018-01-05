		<h2>VALIDER UN PAIEMENT :</h2>
        <form class="form-horizontal" action="validate_payment" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="resp_fina">Responsable financier :</label>
                <div class="col-sm-10">
                    <select class="form-control" id="resp_fina" name="resp_fina">
					<?php
						$resps = ValidatePayment_M::listResp();
						foreach($resps as $resp)
						{
							echo "<option value=" . $resp['user'] . ">" . $resp['nom'] . " " . $resp['prenom'] . "</option>";
						}
					?>
					</select>
				</div>
			</div>
			<div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="validatepayment">Ajouter</button>
                </div>
            </div>
        </form>
      
    </div>