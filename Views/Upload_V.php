			<div class="card-header text-white mb-3" style="background-color: #337ab7"><h2>FOURNIR UN DOCUMENT :</h2></div>
		<div class=card-body> 
		<form class="form-horizontal" method="post" action="upload" enctype="multipart/form-data">

			<div class="form-group">
				<div class="card border-dark">
					<label class="control-label col-sm-2" for="rib">RIB:</label>
					<div class="card-body">
						<label class="btn btn-primary" for="rib">
							<input id="rib" name="rib" type="file" style="display:none" 
							onchange="$('#upload-file-info').html(this.files[0].name)">
							<i class="fa fa-folder-open" aria-hidden="true"></i>Parcourir...
						</label>
						<span class='badge badge-success' id="upload-file-info"></span>
					</div>
				</div>
			</div>	
			
			<div class="form-group">
				<div class="card border-dark">
					<label class="control-label col-sm-2" for="fiche">Fiche de renseignements:</label>
					<div class="card-body">
						<label class="btn btn-primary" for="fiche">
							<input id="fiche" name="fiche" type="file" style="display:none" 
							onchange="$('#upload-file-info').html(this.files[0].name)">
							<i class="fa fa-folder-open" aria-hidden="true"></i>Parcourir...
						</label>
						<span class='badge badge-success' id="upload-file-info"></span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="card border-dark">
					<label class="control-label col-sm-2" for="attestation">Attestation employeur:</label>
					<div class="card-body">
						<label class="btn btn-primary" for="attestation">
							<input id="attestation" name="attestation" type="file" style="display:none" 
							onchange="$('#upload-file-info').html(this.files[0].name)">
							<i class="fa fa-folder-open" aria-hidden="true"></i>Parcourir...
						</label>
						<span class='badge badge-success' id="upload-file-info"></span>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-default col-3" name="upload">Envoyer</button>
				
			</div>	
	
		</form>
