		<h2 class=panel-title>EDITER UN UTILISATEUR :</h2>
	</div>
	<div class="panel-body">
	<?php 
		$user = EditUser_M::getUser($_GET['id']);
	?>
        <form class="form-horizontal" action="edit_user&id=<?php echo $user[0][0] ?>" method="post">
			<div class="form-group hidden">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" value="<?php if (isset($user[0][0])) echo $user[0][0];?>" name="id">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nom">Nom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nom" value="<?php if (isset($user[0][2])) echo $user[0][2];?>" name="nom">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="prenom">Prénom :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prenom" value="<?php if (isset($user[0][3])) echo $user[0][3];?>" name="prenom">	
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Adresse email :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" value="<?php if (isset($user[0][4])) echo $user[0][4];?>" name="email">
                </div>
            </div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="utilisateur">Type d'utilisateur :</label>
				<div class="col-sm-10">
					<select name="profil" id="profil" class="form-control" size="1">
					<?php 
						if (isset($user[0][1]))
						{
					?>
					<option value="1" <?php if ($user[0][1] == 1) { ?>selected<?php } ?>>Administrateur
					<option value="2" <?php if ($user[0][1] == 2) { ?>selected<?php } ?>>Contrôle de Gestion
					<option value="3" <?php if ($user[0][1] == 3) { ?>selected<?php } ?>>Responsable de Formation
					<option value="4" <?php if ($user[0][1] == 4) { ?>selected<?php } ?>>Responsable Administratif de Formation
					<option value="5" <?php if ($user[0][1] == 5) { ?>selected<?php } ?>>Responsable Financier
					<option value="6" <?php if ($user[0][1] == 6) { ?>selected<?php } ?>>Vacataire
					<?php
						}
					?>
					</select>
				</div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="edituser"> <span class="glyphicon glyphicon-floppy-disk"></span> Sauvegarder</button>
                </div>
            </div>
        </form>