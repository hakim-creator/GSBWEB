<!DOCTYPE html>
<html lang="fr">
	 <head>
	 <meta charset="utf-8">
	 <link rel="stylesheet"
	 href="vue/bootstrap.min.css" />
	 <title>
	 Saisie des informations d'un nouvel elève
	 </title>
	 </head>
 <body>

		 <div class="container">
		 <h1>Ajout d'un activiter</h1><br />
		 <form method="post"
		 action="index.php?action=A">
		
		 <p>
		 <label for="nomE">Nom</label><br />
		 <input type="text" name="nomEl" id="nomEl" />
		 </p>
		 <p>
		 <label for="prenomE">Date</label><br />
		 <input type="text" name="dateEl" id="dateEl" />
		 </p>

		 <p>
		 <label for="classeE">Lieu</label><br />
		 <input type="text" name="lieuEl" id="lieuEl"/>
		 </p>

		 <br /><br />
		 <p>
		 <input type="submit" value="Valider la saisie" />
		 <input type="reset" value="Effacer la saisie" />
		 </p>
		 <br />

		 </form>

		 

		 </div>
 </body>
</html>