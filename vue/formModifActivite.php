<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modifier un activiter</title>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

  <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      <form method="post" action="index.php?action=M">
        <div class="row mb-3">
    <label for="nom" class=""></label>
    <div class="col-sm-12">
      <input type="hidden" class="form-control" id="nom" name="idEl" value="<?php echo $activite['0']; ?>">
    </div>
        
  
  
  <div class="row mb-3">
    <label for="description" class="">Nom de l'activite :</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="nomEl" value="<?php echo $activite['1']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Date :</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="dateEl" value="<?php echo $activite['2']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Lieu :</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="lieuEl" value="<?php echo $activite['3']; ?>">
    </div>
  </div>
       
  
  <p>
<input type="submit"
value="Valider les modifications" class="btn btn-outline-dark" />
</p>
</form>
    </div>
  </div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>