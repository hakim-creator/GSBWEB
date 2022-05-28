<?php 
session_start();
 ?>
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
    <div class="col col-lg-4">
      <form method="post" action="index.php?action=A">
       
        <h2>Ajouter une activité</h2>
  
  
  <div class="row mb-3">
    <label for="description" class="">Nom de l'activite</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="nomEl" value="" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Date</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="dateEl" value="" placeholder="JJ/MM/AAAA" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Adresse</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="nom" name="lieuEl" value="" placeholder="56 Avenue du comminge, 31270, Cugnaux " required>
    </div>
  </div>
  

       
  
  <p>
<input type="submit"
value="Valider" class="btn btn-outline-dark"/>
</p>
</form>

<br></br>
		<p>
		 <a href="index.php?action=AA" class="nav-link active">
		 Annuler : Retour au menu des activités</a>
		 </p>
    </div>
  </div>


</div>
		


		 <script type="text/javascript" src="js/bootstrap.js"></script>

 </body>
</html>