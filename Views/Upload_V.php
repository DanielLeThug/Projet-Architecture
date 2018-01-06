			<h2 class=panel-title>FOURNIR UN DOCUMENT :</h2>
		</div>
		<div class=panel-body> 
		<form class="form-horizontal" method="post" action="upload" enctype="multipart/form-data">


			<div class="form-group">
				<label class="control-label col-sm-2" for="rib">RIB:</label>
				<div class="col-sm-10">
					<div class="panel panel-info">
						<label class="btn btn-primary" for="rib">
							<input id="rib" name="rib" type="file" style="display:none" 
							onchange="$('#upload-file-rib').html(this.files[0].name)">
							<span class="glyphicon glyphicon-folder-open"></span> Parcourir...
						</label>
						<span class='label label-info' id="upload-file-rib"></span>
					</div>
				</div>
			</div>	
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="fiche">Fiche de renseignements:</label>
				<div class="col-sm-10">
					<div class="panel panel-info">
						<label class="btn btn-primary" for="fiche">
							<input id="fiche" name="fiche" type="file" style="display:none" 
							onchange="$('#upload-file-fiche').html(this.files[0].name)">
							<span class="glyphicon glyphicon-folder-open"></span> Parcourir...
						</label>
						<span class='label label-info' id="upload-file-fiche"></span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="attestation">Attestation employeur:</label>
				<div class="col-sm-10">
					<div class="panel panel-info">
						<label class="btn btn-primary" for="attestation">
							<input id="attestation" name="attestation" type="file" style="display:none" 
							onchange="$('#upload-file-attestation').html(this.files[0].name)">
							<span class="glyphicon glyphicon-folder-open"></span> Parcourir...
						</label>
						<span class='label label-info' id="upload-file-attestation"></span>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-10 col-sm-10">
					<button type="submit" class="btn btn-default" name="upload">Envoyer</button>
				</div>
			</div>	
	
		</form>
