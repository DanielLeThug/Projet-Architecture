			<h2 class=panel-title>AJOUTER UN COURS :</h2>
		</div>
		<div class="panel-body">
        <form class="form-horizontal" action="add_lesson" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="matiere">Intitulé du cours :</label>
                <div class="col-sm-10">
                    <select class="form-control" id="matiere" name="matiere">
					<?php
						$disciplines = AddLesson_M::listDiscipline();
						foreach($disciplines as $discipline)
						{
							echo "<option value=" . $discipline[0] . ">" . $discipline[1] . "</option>";
						}
					?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="date"><span class='glyphicon glyphicon-calendar'></span> Date :</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="date" name="date">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="heure"><span class='glyphicon glyphicon-time'></span> Heure :</label>
				<div class="col-sm-10">
					<input type="time" class="form-control" id="heure" name="heure">
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
							echo "<option value=" . $user[0] . ">" . $user[3] . " " . $user[2] . "</option>";
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
							echo "<option value=" . $salle[0] . ">" . $salle[1] . ", batiment " . $salle[4] . "</option>";
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
							echo "<option value=" . $type_de_cours[0] . ">" . $type_de_cours[1] . "</option>";
						}
					?>
					</select>
                </div>
            </div>
			
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="addlesson">Ajouter</button>
                </div>
            </div>
        </form>
      
    </div>