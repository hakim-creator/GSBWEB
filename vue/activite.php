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

<table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Nom</th>
      <th scope="col">Date</th>
      <th scope="col">Lieu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Paracetamol</td>
      <td>12/25/2200</td>
      <td>Place de la reb</td>
      <td><button type="button" class="btn btn-outline-primary">Supprimer</button></td>
    </tr>
    
  </tbody>
</table>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>