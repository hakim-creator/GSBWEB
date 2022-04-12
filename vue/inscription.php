<!DOCTYPE html>
<html lang="fr">
   <head>
   <meta charset="utf-8">
   <link rel="stylesheet"
   href="vue/bootstrap.min.css" />
   <title>
   Saisie des informations d'un nouvel utilisateur
   </title>
   </head>
 <body>

     <div class="container">
     <h1>Inscription</h1><br />
     <form method="post"
     action="index.php?action=I">
    
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
     <input type="submit" value="Valider la saisie" />
     
     <p><a href="inscription.php"></a></p>
     </p>
     <br />

     </form>

     <p>
     <a href="index.php">
     Annuler : Retour au menu des elèves</a>
     </p>

     </div>
 </body>
</html>