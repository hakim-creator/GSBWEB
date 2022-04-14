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
         <div class="col col-lg-2">
     <h1>Inscription</h1><br />
     <form method="post" action="index.php?action=I">
    
     <p>
     <label for="nomE">Nom d'utilisateur</label><br />
     <input type="text" name="usernameEl" id="nomUtilEl" />
     </p>
     <p>
     <label for="prenomE">Mot de passe</label><br />
     <input type="password" name="passwordEl" id="motDePasseEl" />
     </p>

     <p>
     <label for="classeE">Nom</label><br />
     <input type="text" name="nomEl" id="nomEl"/>
     </p>

     <p>
     <label for="anneeE">Prenom</label><br />
     <input type="text" name="prenomEl" id="prenomEl" />
     </p>
     
     <br /><br />
     <p>
     <input type="submit" class="btn btn-outline-dark" value="Valider la saisie" />
     </p>
     <br />

     </form>

     <p>
     <a href="index.php?action=C">
     Deja enregistrer ? Connectez vous</a>
     </p>

     <p>
     <a href="index.php">
     Retour</a>
     </p>

     </div>
  </div>
</div>




     

<script type="text/javascript" src="js/bootstrap.js"></script>
 </body>
</html>