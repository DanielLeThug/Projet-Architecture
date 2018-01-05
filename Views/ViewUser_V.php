		<h2>LISTE DES UTILISATEURS :</h2>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Profil</th>
					<th scope="col">Nom</th>
					<th scope="col">Prenom</th>
					<th scope="col">Email</th>
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
						echo "" . $profil . "</td><td>" . $user[2] . "</td><td>" . $user[3] . "</td><td>" . $user[4] . "</td><td>" . "<a href='edit_user&id=$user[0]'><span class='glyphicon glyphicon-pencil'></span></a>" . "</td><td>" . "<a href='delete_user&id=$user[0]'><span class='glyphicon glyphicon-remove'></span></a>" . "</td></tr>";
						
					}
					require_once("./Views/ViewUser2_V.php");
				?>
			</tbody>
    </div>