			<h2 class=panel-title>AJOUTER UN PAIEMENT (SIMULATION) :</h2>
		</div>
		<div class="panel-body">
        <form class="form-horizontal" action="add_payment" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="date"><span class='glyphicon glyphicon-calendar'></span> Date :</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="date" name="date">
				</div>
			</div>
			<div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="addpayment">Valider</button>
                </div>
            </div>
        </form>