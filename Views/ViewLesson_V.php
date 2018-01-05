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
			<th scope="col"></th>
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
							$virement = 'Non | <a href="validate_payment&id_cours=' . $lesson['id_cours'] . '" >Valider paiement <span class="glyphicon glyphicon-euro"></span></a> ';
						}
			echo "<tr><td>" . $i;
			echo "</td><td>" . $lesson['Intitulé'] . " " . $lesson['Type'];
			echo "</td><td>" . $lesson['Date'];
			echo "</td><td>" . $lesson['Professeur'];
			echo "</td><td>" . $lesson['Salle'];
			echo "</td><td>" . $virement;
			echo "</td><td><a href='edit_lesson&id=" . $lesson['Id'] . "'><span class='glyphicon glyphicon-pencil'></span></a>";
			echo "</td><td><a href='view_lesson&id=" . $lesson['Id'] . "'><span class='glyphicon glyphicon-remove'></span></a></td></tr>";
		}
		?>
	</tbody>
</div>