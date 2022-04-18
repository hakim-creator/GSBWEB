<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GSB</title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

  <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      <form method="post" action="index.php?action=P">
        

        <div class="row mb-3">
    <label for="nom" class="">id_util</label>
    <div class="col-sm-12">
      <input type="hidden" class="form-control" id="nom" name="id_ut" value="<?php echo $_SESSION['idComp']; ?>" required>
    </div>
  </div>
        <div class="row mb-3">
    <label for="nom" class="">Nom</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="nomEl" value="<?php echo $_SESSION['nomComp']; ?>" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Prenom</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="prenomEl" id="prenom" value="<?php echo $_SESSION['prenomComp']; ?>" required>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="description" class="">Nom de l'activite</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="activiteEl" value="<?php echo $activite['nom']; ?>" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Date</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="dateEl" value="<?php echo $activite['Date_Activite']; ?>" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Adresse</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="lieuEl" value="<?php echo $activite['Lieu']; ?>" required>
    </div>
  </div>
       
  
  <button type="submit" class="btn btn-primary">Je participe</button>
</form>
    </div>
  </div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>