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
           if (confirm("Supprimer le medicament numéro " +
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
          <a class="nav-link active" href="index.php?action=AA">Activité</a>     
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?action=CT">Contact</a>     
        </li>

        <li class="nav-item">
          <button class="btn btn-outline-dark">
          <a class="nav-link active" aria-current="activite" href="index.php?action=D"> Se deconnecter</a>
          </button>
        </li>

      </ul>
      <div class="profile">
      <a href="index.php?action=PR" class="nav-link active"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><p><?php echo $utilisateur['nomComplet']; ?> <?php echo $utilisateur["prenomComplet"]; ?> (<?php echo $utilisateur['nomUtilisateur']; ?>)</p></a> 
    </div>
  </div>
</nav>

<br></br>
<h4>Bienvenue <?php echo $utilisateur['nomComplet']; ?> <?php echo $utilisateur["prenomComplet"]; ?>. </h4> 
<br></br>
<h4>Nos médicaments :</h4>

<div class="py-12">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Effet sécondaire</th>
      <th scope="col">Effet thérapeutique</th>
      <th scope="col">Peu intéragire</th>
      <th scope="col">Ne peut pas intéragire</th>
    </tr>
  </thead>
  

            <?php foreach ($medicaments as $medicament): ?>
                  
                   <!-- mise en place d'un formulaire -->
                   <form method="POST"
                   action="index.php?action=MS">
                   <!-- champ caché pour le code de medicament de la ligne -->
                   <!--<input type="hidden" name="codeElevAction" value="<?php echo $medicament['id']; ?>" />-->
                   <!-- affichage de la ligne courante -->

                   <tr>
                   <td><?php echo $medicament["0"]; ?></td>
                   <td><?php echo $medicament["1"]; ?></td>
                   <td><?php echo $medicament["2"];?></td>
                   
                  
                   <td><?php echo $medicament["3"];?></td>
                   <td><?php echo $medicament["4"];?></td>
                   <td><?php echo $medicament["5"];?></td>
                   <td><?php echo $medicament["6"];?></td>
                  
                   </td>
                   </tr>
                   </form>

            <?php endforeach; ?>
</table>
</div>
</div>
</div>
</div>
</div>
<!--<?php if($_SESSION['typeUtil'] == "A") { ?> 
<a href="index.php?action=FM" class="nav-link active">Ajouter un médicament</a>
<?php } ?>-->
<br></br>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>