<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Projet Architecture</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>
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
					if (!isset($_COOKIE['PAID_']))
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