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
      <form method="post" action="index.php?action=M">
        <div class="row mb-3">
    <label for="nom" class="">ID</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="idEl" value="<?php echo $activite['id']; ?>">
    </div>
        
  
  
  <div class="row mb-3">
    <label for="description" class="">Nom de l'activite</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="nomEl" value="<?php echo $activite['nom']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Date</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="dateEl" value="<?php echo $activite['Date_Activite']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Lieu</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="lieuEl" value="<?php echo $activite['Lieu']; ?>">
    </div>
  </div>
       
  
  <p>
<input type="submit"
value="Valider les modifications" />
</p>
</form>
    </div>
  </div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>