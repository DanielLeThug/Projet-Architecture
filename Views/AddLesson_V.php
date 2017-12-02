<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Projet Architecture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<?php include 'Bandeau_V.php'?>
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
                    <input type="password" class="form-control" id="salle" placeholder="Entrez une salle désirée" name="salle">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="addcourse">Ajouter</button>
                </div>
            </div>
        </form>
      
    </div>
</body>
</html>
