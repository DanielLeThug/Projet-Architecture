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
							$glyph = 'glyphicon glyphicon-ok';
						}
						else
						{
							$virement = 'Non';
							$glyph = 'glyphicon glyphicon-remove';
						}
						echo "<tr><td>" . $i . "</td><td>" . $lesson['Intitulé'] . " " . $lesson['Type'] . "</td><td>" . $lesson['Date'] . "</td><td>" . $lesson['Professeur'] . "</td><td>" . $lesson['Salle'] . "</td><td>" .  $virement . " " . "<span class='$glyph'></span></td></tr>";
					}
				?>
			</tbody>
    </div>