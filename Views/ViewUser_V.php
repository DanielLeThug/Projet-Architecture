			<div class="card-header text-white mb-3" style="background-color: #337ab7"><h2>LISTE DES UTILISATEURS :</h2></div>
		<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Profil</th>
					<th scope="col">Nom</th>
					<th scope="col">Prenom</th>
					<th scope="col">Email</th>
					<th scope="col"><i class="fa fa-cog" aria-hidden="true"></i></th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$users = ViewUser_M::listUser();
					$i = 0;
					foreach($users as $user)
					{
						$i++;
						echo "<tr><td>" . $i . "</td><td>";
						switch($user[1])
						{
							case 1:
								$profil = "Administrateur";
								break;
							case 2:
								$profil = "Contrôle de gestion";
								break;
							case 3:
								$profil = "Responsable de Formation";
								break;
							case 4:
								$profil = "Responsable Administratif de formation";
								break;
							case 5:
								$profil = "Responsable Financier";
								break;
							case 6:
								$profil = "Vacataire";
								break;
							default:
								$profil = "";
						}
						echo "" . $profil . "</td><td>" . $user[2] . "</td><td>" . $user[3] . "</td><td>" . $user[4] . "</td><td>" . "<a class='btn btn-warning btn-sm' href='edit_user&id=$user[0]'><i class='fa fa-pencil' aria-hidden='true'></i></a>" . "</td><td>" . "<a class='btn btn-danger btn-sm' href='view_user&id=$user[0]'><i class='fa fa-times' aria-hidden='true'></i></a>" . "</td></tr>";

					}
				?>
			</tbody>