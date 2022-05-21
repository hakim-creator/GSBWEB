<!DOCTYPE html>
<html lang="fr">
	 <head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
	 <title>
	 GSB
	 </title>
	 </head>
 <body>

	

		 <div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
      <form method="post" action="index.php?action=PRMMP">
        <h4>Modifiez votre mot de passe</h4>
       
        
  
  <div class="row mb-3">
    <label for="description" class=""></label>
    <div class="col-sm-12">
      <input type="hidden" class="form-control" name="idEl" value="<?php echo $_SESSION['idComp'] ?>">
    </div>
  </div>
  

  <div class="row mb-3">
    <label for="description" class="">Votre nouveau mot de passe :</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" name="passwordEl" value="">
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