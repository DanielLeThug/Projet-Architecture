				
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class='glyphicon glyphicon-book'></span> Menu des cours<span class="caret"></span></a> 
					<ul class="dropdown-menu">
					<?php
						if ($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 3 || $GLOBALS['profil'][0]['profil'] == 4)
						{
					?>
						<li><a href="add_lesson"><span class='glyphicon glyphicon-plus'></span> Ajouter un cours</a></li>
						<li><a href="add_lesson_name"><span class='glyphicon glyphicon-plus'></span> Ajouter une matière</a></li>
					<?php
						}
					?>
						<li><a href="view_lesson"><span class='glyphicon glyphicon-th-list'></span> Voir les cours</a></li>
					</ul> 
				</li>
				<?php
					if ($GLOBALS['profil'][0]['profil'] == 1)
					{
				?>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class='glyphicon glyphicon-user'></span> Menu des utilisateurs<span class="caret"></span></a> 
					<ul class="dropdown-menu"> 
						<li><a href="add_user"><span class='glyphicon glyphicon-plus'></span> Ajouter un utilisateur</a></li> 
						<li><a href="view_user"><span class='glyphicon glyphicon-th-list'></span> Voir les utilisateurs</a></li> 
					</ul>
				</li>
				<?php
					}
				?>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class='glyphicon glyphicon-wrench'></span> Menu Administratif<span class="caret"></span></a> 
					<ul class="dropdown-menu">
						<li><a href="upload"><span class='glyphicon glyphicon-file'></span> Documents administratifs</a></li>
						<?php
							if ($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 4)
							{
						?>
						<li><a href="validate_documents"><span class='glyphicon glyphicon-ok'></span> Valider Documents administratifs</a></li>
						<?php
							}
							if ($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 2 || $GLOBALS['profil'][0]['profil'] == 5)
							{
						?>
						<li><a href="add_payment"><span class='glyphicon glyphicon-plus'></span> Ajouter Virement</a></li>
						<?php
							}
						?>
					</ul> 
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li> <a href='change_password'><span class='glyphicon glyphicon-lock'></span> Changer mot de passe</a> </li>
				<li> <a href='logout'><span class='glyphicon glyphicon-log-out text-danger'></span> Se déconnecter</a> </li>
			</ul>
		</div>
		  <!-- Navbar content -->
	</nav>
	<div class="panel panel-primary">
		<div class=panel-heading>