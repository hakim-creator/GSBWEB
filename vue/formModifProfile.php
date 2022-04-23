<!DOCTYPE html>
<html lang="fr">
	 <head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
	 <title>
	 Profile
	 </title>
	 </head>
 <body>

	

		 <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
      <form method="post" action="index.php?action=PRMM">
       
        
  
  <div class="row mb-3">
    
    <div class="col-sm-12">
     <input type="hidden" name="idEl" class="form-control" value="<?php echo $_SESSION['idComp']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Nom :</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="nomEl" value="<?php echo $utilisateur['nomComplet']; ?>">
      
    </div>
  </div>
  <div class="row mb-3">
    <label for="description" class="">Prénom :</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="prenomEl" value="<?php echo $utilisateur['prenomComplet']; ?>">
     
    </div>
  </div>

  
  

       
  
  <p>
<input type="submit"
value="Valider les modifications" class="btn btn-outline-dark"/>
</p>
</form>

<br></br>
		<p>
		 <a href="index.php?action=MEC" class="nav-link active">
		 Retour</a>
		 </p>
    </div>
  </div>


</div>
		


		 <script type="text/javascript" src="js/bootstrap.js"></script>

 </body>
</html>