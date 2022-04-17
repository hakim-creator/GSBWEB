<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
   <head>
   <meta charset="utf-8">
   <link rel="stylesheet"
   href="vue/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
   <title>
   Saisie des informations d'un nouvel utilisateur
   </title>
   </head>
 <body>

     <div class="container">
      <div class="row justify-content-md-center">
    <div class="col col-lg-3">
     <h1>Inscription</h1><br />
     <form method="post" action="index.php?action=I">
    
     <div class="row mb-3">
     <label for="nomE">Nom d'utilisateur</label><br />
     <div class="col-sm-12">
     <input type="text" name="usernameEl" class="form-control" id="nomUtilEl" required />
     </div>
      </div>
     <div>
     <label for="prenomE">Mot de passe</label><br />
     <input type="password" name="passwordEl" class="form-control" id="motDePasseEl" title="Majiscules, miniscules, chiffres et caractères spéciaux" placeholder="12 caractères minimum"  required />
     </div>

     <div>
     <label for="classeE">Nom</label><br />
     <input type="text" name="nomEl" class="form-control" id="nomEl" placeholder="WAYNE" required />
     </div>

     <div>
     <label for="anneeE">Prenom</label><br />
     <input type="text" name="prenomEl" class="form-control" id="prenomEl" placeholder="Bruce" required />
     </div>
     
     <br /><br />
     <div>
     <input type="submit" class="btn btn-outline-dark" value="S'inscrire" required />
     </div>
     <br />

     </form>

     <div>
     <a href="index.php?action=C" class="nav-link active" aria-current="activite">
     Déja enregistrer ? Connectez vous</a>
     </div>

     <div>
     
     <a href="index.php" class="nav-link active">
     Retour a l'accueil</a>
     
     </div>

     </div>
  </div>
</div>




     

<script type="text/javascript" src="js/bootstrap.js"></script>
 </body>
</html>