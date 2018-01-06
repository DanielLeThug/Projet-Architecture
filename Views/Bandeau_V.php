		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="index.php">Gestion vacataires</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
				  </li>
				  <!-- Menu des cours -->
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <i class="fa fa-book" aria-hidden="true"></i> Menu des cours 
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="add_lesson"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter un cours</a>
					  <a class="dropdown-item" href="view_lesson"><i class="fa fa-tasks" aria-hidden="true"></i> Voir les cours</a>
					</div>
				  </li>
				  <!-- Menu des utilisateurs -->
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <i class="fa fa-user" aria-hidden="true"></i> Menu des utilisateurs
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="add_user"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter un utilisateur</a>
					  <a class="dropdown-item" href="view_user"><i class="fa fa-tasks" aria-hidden="true"></i> Voir les utilisateurs</a>
					</div>
				  </li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <button class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fa fa-sign-out" aria-hidden="true"></i> Se déconnecter</button>
				</form>
			  </div>
			</nav>