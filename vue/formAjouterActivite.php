<!DOCTYPE html>
<html lang="fr">
	 <head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
	 <title>
	 Saisie des informations d'un nouvel elève
	 </title>
	 </head>
 <body>

	

		 <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      <form method="post" action="index.php?action=A">
       
        
  
  
  <div class="row mb-3">
    <label for="description" class="">Nom de l'activite</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="nomEl" value="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Date</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="dateEl" value="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Lieu</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="lieuEl" value="">
    </div>
  </div>
       
  
  <p>
<input type="submit"
value="Valider les modifications" class="btn btn-outline-dark"/>
</p>
</form>

<br></br>
		<p>
		 <a href="index.php?action=AA">
		 Annuler : Retour au menu des activiter</a>
		 </p>
    </div>
  </div>


</div>
		


		 <script type="text/javascript" src="js/bootstrap.js"></script>

 </body>
</html>