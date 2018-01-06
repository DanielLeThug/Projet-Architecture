<h2 class=panel-title>EDITER UN COURS :</h2>
</div>
<div class="panel-body">
	<?php
	$lesson = EditLesson_M::getLesson($_GET['id']);
	?>
	<form class="form-horizontal" action="add_lesson" method="post">
		<div class="form-group hidden">
			<div class="col-sm-10">
				<input type="text" class="form-control" id="id" value="<?php echo $_GET['id'];?>" name="id">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="matiere">Intitulé du cours :</label>
			<div class="col-sm-10">
				<select class="form-control" id="matiere" name="matiere">
					<?php
					$disciplines = AddLesson_M::listDiscipline();
					foreach($disciplines as $discipline)
					{
						if ($discipline[1] == $lesson[0]) {
							echo "<option value=".$discipline[0]." selected>".$lesson[0]."</option>";
						} else {
							echo "<option value=" . $discipline[0] . ">" . $discipline[1] . "</option>";
						}
					}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="date"><span class='glyphicon glyphicon-calendar'></span> Date :</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="date" name="date" value="<?php echo $lesson[1]; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="heure"><span class='glyphicon glyphicon-time'></span> Heure :</label>
			<div class="col-sm-10">
				<input type="time" class="form-control" id="heure" name="heure" value="<?php echo $lesson[2]; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="professeur"><span class='glyphicon glyphicon-user'></span> Professeur :</label>
			<div class="col-sm-10">
				<select class="form-control" id="professeur" name="professeur">
					<?php
					$users = AddLesson_M::listUser();
					foreach($users as $user)
					{
						if ($user[3] . " " . $user[2] == $lesson[3]) {
							echo "<option value=".$user[0]." selected>".$lesson[3]."</option>";
						} else {
							echo "<option value=" . $user[0] . ">" . $user[3] . " " . $user[2] . "</option>";
						}
					}
					?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="salle">Salle :</label>
			<div class="col-sm-10">
				<select class="form-control" id="salle" name="salle">
					<?php
					$salles = AddLesson_M::listSalle();
					foreach($salles as $salle)
					{
						if ($salle[1] . ", batiment " . $salle[4] == $lesson[4]) {
							echo "<option value=".$salle[0]." selected>".$lesson[4]."</option>";
						} else {
							echo "<option value=" . $salle[0] . ">" . $salle[1] . ", batiment " . $salle[4] . "</option>";
						}
					}
					?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="type_cours"><span class='glyphicon glyphicon-education'></span> Type de cours :</label>
			<div class="col-sm-10">
				<select class="form-control" id="type_cours" name="type_cours">
					<?php
					$types_de_cours = AddLesson_M::listTypesDeCours();
					foreach($types_de_cours as $type_de_cours)
					{
						if ($type_de_cours[1] == $lesson[5]) {
							echo "<option value=".$type_de_cours[0]." selected>".$lesson[5]."</option>";
						} else {
							echo "<option value=" . $type_de_cours[0] . ">" . $type_de_cours[1] . "</option>";
						}
					}
					?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default" name="editlesson"> <span class="glyphicon glyphicon-floppy-disk"></span> Sauvegarder</button>
			</div>
		</div>
	</form>
