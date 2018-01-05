<h2>FOURNIR UN DOCUMENT :</h2>
<form class="form-horizontal" method="post" action="upload" enctype="multipart/form-data">

	<div class="panel panel-primary"> 
	
		<div class=panel-heading> 
		<h3 class=panel-title>Documents administratifs</h3> 
		</div> 
		<div class=panel-body> 

			<div class="form-group">
				<label class="control-label col-sm-2" for="rib">RIB:</label>
				<div class="col-sm-10">
					<div class="panel panel-info">
						<label class="btn btn-primary" for="rib">
							<input id="rib" name="rib" type="file" style="display:none" 
							onchange="$('#upload-file-info').html(this.files[0].name)">
							Parcourir
						</label>
						<span class='label label-info' id="upload-file-info"></span>
					</div>
				</div>
			</div>	
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="fiche">Fiche de renseignements:</label>
				<div class="col-sm-10">
					<div class="panel panel-info">
						<label class="btn btn-primary" for="fiche">
							<input id="fiche" name="fiche" type="file" style="display:none" 
							onchange="$('#upload-file-info').html(this.files[0].name)">
							Parcourir
						</label>
						<span class='label label-info' id="upload-file-info"></span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="attestation">Attestation employeur:</label>
				<div class="col-sm-10">
					<div class="panel panel-info">
						<label class="btn btn-primary" for="attestation">
							<input id="attestation" name="attestation" type="file" style="display:none" 
							onchange="$('#upload-file-info').html(this.files[0].name)">
							Parcourir
						</label>
						<span class='label label-info' id="upload-file-info"></span>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-10 col-sm-10">
					<button type="submit" class="btn btn-default" name="upload">Envoyer</button>
				</div>
			</div>
			
		</div>
	
	</div>
	
    
	
	
	

	
	
</form>
