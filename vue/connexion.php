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
  <form method="post"
action="index.php?action=RU">
<p>
<label for="inom">Votre nom
d'utilisateur</label><br />
<input type="text" name="nomU" id="inom"
value="<?php
if (isset($_SESSION["nomUtil"]))
echo $_SESSION["nomUtil"];
?>"
/>
</p>
<p>
<label for="imdp">Votre mot de passe</label><br />
<input type="password" name="motDePasseU"
id="imdp" />
</p>
<br /><br />
<p>
<input type="submit" value="Se connecter" />
</p>
<br />
</form>
</div>
<a href="inscription.php"></a>


<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>