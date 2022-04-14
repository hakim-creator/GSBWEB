<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GSB</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

  <div class="container">
    <div class="row justify-content-md-center">
    <div class="col col-lg-3">

  <form method="post"
action="index.php?action=RU">

<div class="row mb-3">

<label for="inom">Votre nom
d'utilisateur</label><br />
<div class="col-sm-12">
<input type="text" class="form-control" name="nomU" id="inom"
value="<?php
if (isset($_SESSION["nomUtil"]))
echo $_SESSION["nomUtil"];
?>"
/>


</div>
</div>
<p>
<label for="imdp">Votre mot de passe</label><br />
<input type="password" class="form-control" name="motDePasseU"
id="imdp" />
</p>
<br /><br />
<p>
<input type="submit" value="Se connecter" class="btn btn-outline-dark" />
</p>
<br />
</form>
<p>
     <a href="index.php?action=IS" class="nav-link active">
     Pas encore enregistrer ? S'inscrire</a>
 </p>
</div>
</div>
</div>




<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>