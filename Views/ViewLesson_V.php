			<div class="card-header text-white mb-3" style="background-color: #337ab7"><h2>LISTE DES COURS :</h2></div>
		<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Intitulé</th>
					<th scope="col"><i class="fa fa-calendar" aria-hidden="true"></i><i class="fa fa-clock-o" aria-hidden="true"></i> Date</th>
					<th scope="col"><span class='fa fa-user'></span> Professeur</th>
					<th scope="col">Salle</th>
					<th scope="col">Virement Effectué</th>
					<th scope="col"><i class="fa fa-cog" aria-hidden="true"></i></th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$lessons = ViewLesson_M::listLesson();
					$i = 0;
					foreach($lessons as $lesson)
					{
						$i++;
						if($lesson['Virement'] == 1)
						{
							$virement = 'Oui';
						}
						else
						{
							$virement = 'Non | <a href="validate_payment&id_cours=' . $lesson['id_cours'] . '" >Valider paiement <i class="fa fa-eur" aria-hidden="true"></i></a> ';
						}
					echo "<tr><td>" . $i;
					echo "</td><td>" . $lesson['Intitulé'] . " " . $lesson['Type'];
					echo "</td><td>" . $lesson['Date'];
					echo "</td><td>" . $lesson['Professeur'];
					echo "</td><td>" . $lesson['Salle'];
					echo "</td><td>" . $virement;
					echo "</td><td><a class='btn btn-warning btn-sm' href='edit_lesson&id=" . $lesson['Id'] . "'><i class='fa fa-pencil' aria-hidden='true'></i></a>";
					echo "</td><td><a class='btn btn-danger btn-sm' href='view_lesson&id=" . $lesson['Id'] . "'><i class='fa fa-times' aria-hidden='true'></i></a></td></tr>";
					}
				?>
			</tbody>
		</table>
		
		