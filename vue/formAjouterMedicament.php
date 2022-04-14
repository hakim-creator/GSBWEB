<!DOCTYPE html>
<html lang="fr">
	 <head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
	 <title>
	 Saisie des informations d'un nouvel activité
	 </title>
	 </head>
 <body>

	

		 <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      <form method="post" action="index.php?action=AM">
       
        
  
  
  <div class="row mb-3">
    <label for="description" class="">Nom du médicament</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="nomElM" value="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Description</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="desElM" value="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Effet sécondaire</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="secondElM" value="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Effet thérapeutique</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="therapElM" value="">
    </div>
  </div>
       
  
  <p>
<input type="submit"
value="Valider les modifications" class="btn btn-outline-dark"/>
</p>
</form>

<br></br>
		<p>
		 <a href="index.php?action=ME">
		 Annuler : Retour au menu des medicament</a>
		 </p>
    </div>
  </div>


</div>
		


		 <script type="text/javascript" src="js/bootstrap.js"></script>

 </body>
</html>