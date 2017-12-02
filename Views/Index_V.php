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
        <h2>Bienvenue !</h2>
        Que souhaitez-vous faire ?
		<nav class="navbar navbar-default" role="navigation">
			<div class="collapse navbar-collapse" id="oNavigation">
				<ul class="nav navbar-nav">
					<li>Menu</li>
					<li class="dropdown">
						<ul class="dropdown-menu">
							<li><a href="add_lesson">Ajouter un cours</a></li>
						</ul>
						<ul class="dropdown-menu">
							<li><a href="view_lesson">Voir les cours</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</div>

</body>
</html>
