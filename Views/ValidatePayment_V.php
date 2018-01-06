			<div class="card-header text-white mb-3" style="background-color: #337ab7"><h2>VALIDER UN PAIEMENT :</h2></div>
		<div class="card-body">
        <form class="form-horizontal" action="validate_payment" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="resp_fina">Responsable financier :</label>
                <div class="col-sm-10">
                    <select class="form-control" id="resp_fina" name="resp_fina">
					<?php
						$payments = ValidatePayment_M::listPayment();
						foreach($payments as $payment)
						{
							echo "<option value=" . $payment['id'] . "> Le " . $payment['date'] . " par " . $payment['nom'] . " " . $payment['prenom'] . "</option>";
						}
					?>
					</select>
				</div>
			</div>
			<div class="form-group hidden">
				<label class="control-label col-sm-2" for="id">ID :</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id" name="id" value="<?php if (isset($_GET['id_cours'])) echo $_GET['id_cours'];?>">
				</div>
			</div>
			<div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="validatepayment">Valider</button>
                </div>
            </div>
        </form>