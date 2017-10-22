<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Projet Architecture</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>CONNEXION :</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Adresse email :</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Mot de passe :</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Se souvenir de moi </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Se connecter</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
