<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GSB</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GSB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="medicament" href="medicament.php">Médicament</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="activite" href="activite.php">Activité</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<h4>Bienvenue <?php echo $_SESSION['nomComp']; ?> <?php echo $_SESSION["prenomComp"]; ?></h4>
        
               <h1>Liste des elèves</h1><br />
               <!-- mise en place du tableau -->

                 <table class="table table-bordered table-striped">
                 <!-- mise en place de la ligne de titre -->
                   <tr>
                   <th>ID</th>
                   <th>Nom</th>
                   <th>Prénom</th>
                   <th>Année de naissance</th>
                   <th>Classe</th>
                   <?php if($_SESSION['typeUtil'] == "A") { ?>
                   <th>Action 1</th>
                   <th>Action 2</th>
                  <?php } ?>
                   </tr>
                   <!-- affichage de chacune des lignes du tableau -->
                   <?php foreach ($eleves as $eleve): ?>
                  
                   <!-- mise en place d'un formulaire -->
                   <form method="post"
                   action="index.php?action=MS">
                   <!-- champ caché pour le code de l'eleve de la ligne -->
                   <input type="hidden" name="codeElevAction" value="<?php echo $eleve['id']; ?>" />
                   <!-- affichage de la ligne courante -->

                   <tr>
                   <td><?php echo $eleve["id"]; ?></td>
                   <td><?php echo $eleve["nom"]; ?></td>
                   <td><?php echo $eleve["prenom"];?></td>
                   <td><?php echo $eleve["anneeNaissance"];?></td>
                   <td><?php echo $eleve["classe"];?></td>
                   <?php if($_SESSION['typeUtil'] == "A") { ?>
                   <td><input type="submit" name="modif"
                   value="Modifier" /></td>
                   <td><input type="button" value="Supprimer"
                   onClick="confirmSuppr(form);" />
                   <?php } ?>
                   </td>
                   </tr>
                   </form>

                   <?php endforeach; ?>
                   <!-- fin du tableau -->
                 </table>

               <br /><br />
               <!-- lien pour ajouter un employé -->
               <?php if($_SESSION['typeUtil'] == "A") { ?>
               <a
               href="index.php?action=FA">
               Ajouter un elève</a>
               <?php } ?>

                 <!-- lien pour afficher un eleve -->
               <a
               href="../controleur/chargementListeClasses.php">
               Rechercher par classe</a>

               <a href="index.php?action=D">Se déconnecter</a>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>