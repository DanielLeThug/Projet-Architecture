		<h2>LISTE DES COURS :</h2>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Intitulé</th>
					<th scope="col">Date</th>
					<th scope="col">Professeur</th>
					<th scope="col">Salle</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 0;
					foreach($lessons as $lesson)
					{
						$i++;
						echo "<tr><td>" . $i . "</td><td>" . $lesson['Intitulé'] . "</td><td>" . $lesson['Date'] . "</td><td>" . $lesson['Professeur'] . "</td><td>" . $lesson['Salle'] . "</td></tr>";
					}
				?>
			</tbody>
    </div>