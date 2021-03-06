			<h2 class=panel-title>LISTE DES COURS :</h2>
		</div>
		<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Intitulé</th>
					<th scope="col"><span class='glyphicon glyphicon-calendar'></span><span class='glyphicon glyphicon-time'></span> Date</th>
					<th scope="col"><span class='glyphicon glyphicon-user'></span> Professeur</th>
					<th scope="col">Salle</th>
					<?php
						if($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 2 || $GLOBALS['profil'][0]['profil'] == 5)
						{
					?>
					<th scope="col">Virement Effectué</th>
					<?php
						}
					?>
					<?php
						if($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 3 || $GLOBALS['profil'][0]['profil'] == 4)
						{
					?>
					<th scope="col"><span class='glyphicon glyphicon-cog'></span></th>
					<th scope="col"></th>
					<?php
						}
					?>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 0;
					foreach($GLOBALS['lessons'] as $lesson)
					{
						$i++;
						if($lesson['Virement'] == 1)
						{
							$virement = 'Oui';
						}
						else
						{
							$virement = 'Non | <a href="validate_payment&id_cours=' . $lesson['id_cours'] . '" >Valider paiement <span class="glyphicon glyphicon-euro"></span></a> ';
						}
						echo "<tr><td>" . $i;
						echo "<td>" . $lesson['Intitulé'] . " " . $lesson['Type'] . "</td>";
						echo "<td>" . $lesson['Date'] . "</td>";
						echo "<td>" . $lesson['Professeur'] . "</td>";
						echo "<td>" . $lesson['Salle'] . "</td>";
						if($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 2 || $GLOBALS['profil'][0]['profil'] == 5)
						{
							echo "<td>" . $virement . "</td>";
						}
						if($GLOBALS['profil'][0]['profil'] == 1 || $GLOBALS['profil'][0]['profil'] == 3 || $GLOBALS['profil'][0]['profil'] == 4)
						{
							echo "<td><a href='edit_lesson&id=" . $lesson['Id'] . "'><span class='glyphicon glyphicon-pencil'></span></a></td>";
							echo "<td><a href='view_lesson&id=" . $lesson['Id'] . "'><span class='glyphicon glyphicon-remove'></span></a></td></tr>";
						}
					}
				?>
			</tbody>
		</table>