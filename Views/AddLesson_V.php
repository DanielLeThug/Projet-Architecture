			<div class="card-header text-white mb-3" style="background-color: #337ab7"><h2>AJOUTER UN COURS :</h2></div>
		<div class="card-body">
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
				<label class="control-label col-sm-2" for="date"><i class="fa fa-calendar" aria-hidden="true"></i> Date :</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="date" name="date">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="heure"><i class="fa fa-clock-o" aria-hidden="true"></i> Heure :</label>
				<div class="col-sm-10">
					<input type="time" class="form-control" id="heure" name="heure">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="professeur"><i class="fa fa-user" aria-hidden="true"></i> Professeur :</label>
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
				<label class="control-label col-sm-2" for="type_cours"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Type de cours :</label>
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