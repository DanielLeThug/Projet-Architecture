		<h1>WORK IN PROGRESS</h1>
		<h2>AJOUTER UN COURS :</h2>
        <form class="form-horizontal" action="add_lesson" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="intitule">Intitulé :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="intitule" placeholder="Entrez le nom du cours" name="intitule">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="date">Date :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="date" placeholder="Entrez la date et l'heure désirées" name="date">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="professeur">Professeur :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="professeur" placeholder="Entrez le professeur soutenant le cours" name="professeur">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="salle">Salle :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="salle" placeholder="Entrez une salle désirée" name="salle">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="addlesson">Ajouter</button>
                </div>
            </div>
        </form>
      
    </div>