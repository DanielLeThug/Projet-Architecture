<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Projet Architecture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
		<?php include 'Bandeau_V.php'?>
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
					<select name="utilisateur" size="1">
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

</body>
</html>
