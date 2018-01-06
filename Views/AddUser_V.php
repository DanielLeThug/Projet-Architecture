			<h2 class=panel-title>AJOUTER UN UTILISATEUR :</h2>
		</div>
		<div class="panel-body">
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
					<select name="profil" id="profil" class="form-control" size="1">
					<option value="1">Administrateur
					<option value="2">Contrôle de Gestion
					<option value="3">Responsable de Formation
					<option value="4">Responsable Administratif de Formation
					<option value="5">Responsable Financier
					<option value="6">Vacataire
					</select>
				</div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="adduser">Ajouter</button>
                </div>
            </div>
        </form>