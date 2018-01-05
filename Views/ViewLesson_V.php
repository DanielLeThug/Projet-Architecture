		<h2>LISTE DES COURS :</h2>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Intitulé</th>
					<th scope="col">Date</th>
					<th scope="col">Professeur</th>
					<th scope="col">Salle</th>
					<th scope="col">Virement Effectué</th>
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
							$virement = 'Non | <a href="validate_payment&id_mat=' . $lesson['id_mat'] . '&id_vac=' . $lesson['id_vac'] . '&id_salle=' . $lesson['id_salle'] . '&id_type_cours=' . $lesson['id_type_cours'] . '&id_date=' . $lesson['id_date'] . '" >Valider paiement <span class="glyphicon glyphicon-euro"></span></a> ';
						}
						echo "<tr><td>" . $i . "</td><td>" . $lesson['Intitulé'] . " " . $lesson['Type'] . "</td><td>" . $lesson['Date'] . "</td><td>" . $lesson['Professeur'] . "</td><td>" . $lesson['Salle'] . "</td><td>" . $virement . "</td></tr>";
					}
				?>
			</tbody>
    </div>