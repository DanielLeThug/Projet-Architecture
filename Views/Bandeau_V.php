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
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;" >
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li>
						<form class="navbar-form navbar-right inline-form">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Accueil</a></li>
								<li><div class="btn-group">
									<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Menu des cours<span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="add_lesson">Ajouter un cours</a></li>
										<li><a href="view_lesson">Voir les cours</a></li>
									</ul>
								</div></li>
							</ul>
						</form>
					</li>
					<li>
						<form class="navbar-form navbar-right inline-form">
							<ul class="nav navbar-nav">
								<li> <a href="login">Connexion</a> </li>
								<li> <a href="add_user">S'enregistrer</a> </li> 
								<li> <a href="logout">Se déconnecter</a> </li>
							</ul>
						</form>
					</li>
				</ul>
			</div>
		  <!-- Navbar content -->
		</nav>

	</body>
</html>