		<h1>WORK IN PROGRESS</h1>
		<h2>AJOUTER UN COURS :</h2>
        <form class="form-horizontal" action="add_lesson" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="intitule">Intitulé du cours :</label>
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
                    <select class="form-control" id="professeur" name="professeur">