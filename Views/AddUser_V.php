    <div class="container">
        <h2>AJOUTER UN UTILISATEUR :</h2>
        <form class="form-horizontal" action="add_user" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nom">Nom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="prenom">Prénom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" name="prenom">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Adresse email :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Mot de passe :</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="mdp" placeholder="Entrez votre mot de passe" name="mdp">
                </div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-2" for="utilisateur">Type d'utilisateur :</label>
				<div class="col-sm-10">
					<select name="utilisateur" class="form-control" size="1">
					<option>Contrôle de gestion
					<option>Responsable de Formation
					<option>Responsable Administratif de formation
					<option>Responsable Financier
					<option>Vacataire
					</select>
				</div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="adduser">Ajouter</button>
                </div>
            </div>
        </form>
    </div>