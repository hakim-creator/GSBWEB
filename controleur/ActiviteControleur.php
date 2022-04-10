<?php 

function chargementAjoutUtilisateur()
{
// inclusion du formulaire d'ajout d'un employé
require_once "vue/inscription.php";
}

//Activiter
function chargementFormAjoutActivite()
{
// inclusion du formulaire d'ajout d'un employé
require_once "vue/formAjouterActivite.php";
}

function chargementFormParticiper()
{
// inclusion du formulaire d'ajout d'un employé
require_once "vue/formParticiper.php";
}

function rechercheUtilisateurActivite()
{
// démarrage d'une nouvelle session
// doit être la première instruction de la page
session_start();
// récupération des données de la fenêtre de connexion avec sécurisation
// A MODIFIER
$nomU = htmlspecialchars($_POST["nomU"]);
$motDePasseU = htmlspecialchars($_POST["motDePasseU"]) ;

// création d'une variable de session pour le nom utilisateur
$_SESSION["nomUtil"] = $nomU;
// recherche de l'utilisateur : appel de la fonction getUtilisateur du modèle
$utilisateur = getUtilisateur($nomU,$motDePasseU);
// A COMPLETER
/*
Cette fonction va renvoyer la ligne de l'utilisateur ou false s'il n'y a pas concordance
du login et du mot de passe.
*/
if ($utilisateur == false) // A COMPLETER
{
// utilisateur inexistant : retour à la page de connexion : A COMPLETER
    require_once "vue/connexion.php";
}
else
{
// utilisateur existant
// création de 3 variables de session pour le nom et le prénom complet
// (données personnelles), et le type d'utilisateur
   $_SESSION['nomComp']= $utilisateur["nomComplet"];
   $_SESSION['prenomComp']= $utilisateur["prenomComplet"];
   $_SESSION['typeUtil']= $utilisateur["type"];
// recherche des eleves : appel de la fonction getEleves du modèle
$activites = getActivites();
// inclusion du fichier d'affichage des eleves de la vue
require_once "vue/activite.php";
}
}


function consultActivites()
{
// recherche des medicaments : appel de la fonction getMedicaments du modèle
 $activites = getActivites();


 // inclusion du fichier d'affichage des medicaments de la vue
 require_once "vue/activite.php";
}

function ajoutActivite()
{
// récupération des données (champs) du formulaire

 $nomEl = htmlspecialchars($_POST["nomEl"]);
 $dateEl = htmlspecialchars($_POST["dateEl"]);
 $lieuEl = htmlspecialchars($_POST["lieuEl"]);

 // ajout de l'employé : appel de la fonction insEleve du modèle
 insActivites($nomEl, $dateEl, $lieuEl);

// recherche des employés : appel de la fonction getActivites du modèle
 $activites = getActivites();

 // inclusion du fichier d'affichage des employés de la vue
 require_once "vue/formAjouterActivite.php";


}

function participerActivite()
{
// récupération des données (champs) du formulaire

 $nomEl = htmlspecialchars($_POST["nomEl"]);
 $prenomEl = htmlspecialchars($_POST["prenomEl"]);
 $activiteEl = htmlspecialchars($_POST["activiteEl"]);
 $dateEl = htmlspecialchars($_POST["dateEl"]);
 $lieuEl = htmlspecialchars($_POST["lieuEl"]);

 //  appel de la fonction insEleve du modèle
 insParticipes($nomEl,$prenomEl,$activiteEl, $dateEl, $lieuEl);

// recherche des employés : appel de la fonction getActivites du modèle
 $activites = getActivites();

 // inclusion du fichier d'affichage des employés de la vue
 require_once "vue/validationPart.php";


}

function aiguillageActivite()
{

// récupération du code activite
$idE = htmlspecialchars($_POST["codeElevAction"]);
// aiguillage
if (!empty(htmlspecialchars($_POST["modif"])))
{
// recherche de l'activite correspondant à ce code
// via la fonction getActivite du modèle
$activite = getActivite($idE);
// inclusion du formulaire de modification (vue)
require_once "vue/formModifActivite.php";
}
else
   if (!empty(htmlspecialchars($_POST["part"]))) {
   	// recherche de l'activite correspondant à ce code
   // via la fonction getActivite du modèle
   $activite = getActivite($idE);
   // inclusion du formulaire de de participation (vue)
   require_once "vue/formParticiper.php";
   }
else
// appel de la fonction contrôleur de suppression
supprActivite($idE);
}

function modifActivite()
{
// récupération des données du formulaire
 $idEl = htmlspecialchars($_POST["idEl"]);
 $nomEl = htmlspecialchars($_POST["nomEl"]);
 $dateEl = htmlspecialchars($_POST["dateEl"]);
 $lieuEl = htmlspecialchars($_POST["lieuEl"]);
 
 // mise à jour de l'activite : appel de la fonction updActivite 

 // du modèle
updActivite($idEl, $nomEl, $dateEl, $lieuEl);

// recherche des activites : appel de la fonction getActivites du modèle
 $activites = getActivites();

 // inclusion du fichier d'affichage des activites de la vue
 require_once "vue/activite.php";
}

function supprActivite($idE)
{
// suppression de l'activite : appel de la fonction delActivitee du modèle
delActivite($idE);
// recherche des Activites : appel de la fonction getActivites du modèle
$activites = getActivites();
// inclusion du fichier d'affichage des medicaments de la vue

require_once "vue/validationSup.php";
}




 ?>