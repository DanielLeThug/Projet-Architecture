<h2>FOURNIR UN DOCUMENT :</h2>
<form class="form-horizontal" method="post" action="upload" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-sm-2" for="rib">RIB :</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="rib" id="rib" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fiche">Fiche de renseignements :</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="fiche" id="fiche" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="attestation">Attestation employeur :</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="attestation" id="attestation" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="upload">Envoyer</button>
        </div>
    </div>
</form>
