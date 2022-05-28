<!DOCTYPE html>
<html lang="fr">
	 <head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
	 <title>
	 Ajouter un medicament
	 </title>
	 </head>
 <body>

	

		 <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
      <form method="post" action="index.php?action=AM">
       
        <h2>Ajouter un médicament</h2>
  
  
  <div class="row mb-3">
    <label for="description" class="">Nom du médicament</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="nomElM" value="" placeholder="Paracetamol" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Description</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="desElM" value="" placeholder="" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Effet sécondaire</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="secondElM" value="" placeholder="" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Effet thérapeutique</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="therapElM" value="" placeholder="" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Médicament qui peuve intéragir</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="positiveElM" value="" placeholder="Le nom des médicaments" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Médicament qui ne peut pas intéragir</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="negativeElM" value="" placeholder="Le nom des médicaments" required>
    </div>
  </div>
       
  
  <p>
<input type="submit"
value="Valider" class="btn btn-outline-dark"/>
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