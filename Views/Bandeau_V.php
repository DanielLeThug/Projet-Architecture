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
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Accueil</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Menu des cours<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="add_lesson">Ajouter un cours</a></li>
							<li><a href="view_lesson">Voir les cours</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php 
					if (isset($_COOKIE['PAID_']))
					{
						echo "<li> <a href='login'><span class='glyphicon glyphicon-log-in'></span> Connexion</a> </li>";
						echo "<li> <a href='add_user'><span class='glyphicon glyphicon-user'></span> S'enregistrer</a> </li>";
					}
					if (isset($_COOKIE['PAID_']))
					{
						echo "<li> <a href='logout'><span class='glyphicon glyphicon-log-out'></span> Se déconnecter</a> </li>";
					}
				?>
				</ul>
			</div>
		  <!-- Navbar content -->
		</nav>

	</body>
</html>