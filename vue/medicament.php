
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GSB</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script>
           function confirmSuppr(form)
           {
           if (confirm("Supprimer avec identifiant " +
           form.codeElevAction.value))
           // suppression confirmée
           form.submit();
           }
         </script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo_home" src="img/gsbLogo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="medicament" href="#">Médicament</a>
        </li>
        <li class="nav-item">
          
               <a class="nav-link active"
               href="index.php?action=AA">
               Activité</a>
               
        </li>

        <li class="nav-item">
          <button class="btn btn-outline-dark">
          <a class="nav-link active" aria-current="activite" href="index.php?action=D"> Se deconnecter</a>
          </button>
        </li>

      </ul>
    </div>
  </div>
</nav>

<h4>Bienvenue <?php echo $_SESSION['nomComp']; ?> <?php echo $_SESSION["prenomComp"]; ?></h4>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Effet sécondaire</th>
      <th scope="col">Effet thérapeutique</th>
    </tr>
  </thead>
  

            <?php foreach ($medicaments as $medicament): ?>
                  
                   <!-- mise en place d'un formulaire -->
                   <form method="POST"
                   action="index.php?action=MS">
                   <!-- champ caché pour le code de medicament de la ligne -->
                   <input type="hidden" name="codeElevAction" value="<?php echo $medicament['id']; ?>" />
                   <!-- affichage de la ligne courante -->

                   <tr>
                   <td><?php echo $medicament["id"]; ?></td>
                   <td><?php echo $medicament["nom"]; ?></td>
                   <td><?php echo $medicament["Description"];?></td>
                   
                  
                   <td><?php echo $medicament["Effet_Second"];?></td>
                   <td><?php echo $medicament["Effet_Therap"];?></td>
                  
                   </td>
                   </tr>
                   </form>

            <?php endforeach; ?>
</table>

<?php if($_SESSION['typeUtil'] == "A") { ?> 
<a href="index.php?action=FM">Ajouter un médicament</a>
<?php } ?>
<br></br>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>