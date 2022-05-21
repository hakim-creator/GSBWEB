<?php
function consultMedicaments()
{
   session_start();
// recherche des medicaments : appel de la fonction getMedicaments du modèle
 $medicaments = getMedicaments();
$idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);

 // inclusion du fichier d'affichage des medicaments de la vue
 require_once "vue/medicament.php";
}



function chargementFormConnexion()
{
require_once "vue/connexion.php";
}

function chargementContact()
{
   session_start();
require_once "vue/contact.php";
}

function chargementProfile()
{
   session_start();


  $idE = htmlspecialchars($_SESSION['idComp']);


   $utilisateur = getProfile($idE);
   $historiques = getHistoriques($idE);
   require_once "vue/profile.php";
}
function chargementModifProfile()
{
   session_start();
   $idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);
   require_once "vue/formModifProfile.php";
}
function chargementModifPassword()
{
   session_start();
   require_once "vue/formModifPassword.php";
}

function chargementFormHome()
{
require_once "vue/accueil.html";
}

function chargementActivite()
{
   session_start();
   $activites = getActivites();
   $idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);
// inclusion du formulaire d'ajout d'un activite
require_once "vue/activite.php";
}
function chargementMedicament()
{
   session_start();
   $medicaments = getMedicaments();
   $idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);
// inclusion du formulaire d'ajout d'un Medicament
require_once "vue/medicament.php";
}

function chargementFormAjoutMedicament()
{
   session_start();
   $idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);
   require_once "vue/formAjouterMedicament.php";
}

function rechercheUtilisateur()
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
   $_SESSION['usernameComp']= $utilisateur["1"];
   $_SESSION['idComp']= $utilisateur["0"];
   $_SESSION['passwordComp']= $utilisateur["2"];
   $_SESSION['nomComp']= $utilisateur["3"];
   $_SESSION['prenomComp']= $utilisateur["4"];
   $_SESSION['typeUtil']= $utilisateur["5"];
// recherche des eleves : appel de la fonction getEleves du modèle
$medicaments = getMedicaments();
$idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);
// inclusion du fichier d'affichage des eleves de la vue
require_once "vue/medicament.php";
}
}




function aiguillageMedicament()
{

// récupération du code eleve
$idE = htmlspecialchars($_POST["codeElevAction"]);
// aiguillage
if (!empty(htmlspecialchars($_POST["modif"])))
{
// recherche dmedicament correspondant à ce code
// via la fonction getEleve du modèle
$eleve = getMedicament($idE);
// inclusion du formulaire de modification (vue)
require_once "vue/formModifMedicament.php";
}
else
// appel de la fonction contrôleur de suppression
supprMedicament($idE);
}

function ajoutMedicament()
{
// récupération des données (champs) du formulaire

 $nomElM = htmlspecialchars($_POST["nomElM"]);
 $desElM = htmlspecialchars($_POST["desElM"]);
 $therapElM = htmlspecialchars($_POST["therapElM"]);
 $secondElM = htmlspecialchars($_POST["secondElM"]);
 $positiveElM = htmlspecialchars($_POST["positiveElM"]);
 $negativeElM = htmlspecialchars($_POST["negativeElM"]);
 // ajout de l'activité : appel de la fonction insEleve du modèle
 insMedicaments($nomElM, $desElM, $secondElM ,$therapElM , $positiveElM, $negativeElM);

// recherche des employés : appel de la fonction getActivites du modèle
 $medicaments = getMedicaments();

 // inclusion du fichier d'affichage des employés de la vue
 require_once "vue/formAjouterMedicament.php";


}

function modifMedicament()
{
// récupération des données du formulaire
 $idEl = htmlspecialchars($_POST["idEl"]);
 $nomEl = htmlspecialchars($_POST["nomEl"]);
 $descriptionEl = htmlspecialchars($_POST["descriptionEl"]);
 $Effet_SecondEl = htmlspecialchars($_POST["Effet_SecondEl"]);
 $Effet_TherapEl = htmlspecialchars($_POST["Effet_TherapEl"]);
 
 // mise à jour dmedicament : appel de la fonction updMedicament 

 // du modèle
updMedicament($idEl, $nomEl, $descriptionEl,$Effet_SecondEl,$Effet_TherapEl );

// recherche medicaments : appel de la fonction getMedicament du modèle
 $medicaments = getMEdicaments();

 // inclusion du fichier d'affichage des medicament de la vue
 require_once "vue/medicament.php";
}

function modifProfile()
{
// récupération des données du formulaire
session_start();
 $nomEl = htmlspecialchars($_POST["nomEl"]);
 $prenomEl = htmlspecialchars($_POST["prenomEl"]);
 $idEl = htmlspecialchars($_POST["idEl"]);

 
 // mise à jour dmedicament : appel de la fonction updMedicament 

 // du modèle
updProfile($nomEl, $prenomEl, $idEl);



$medicaments = getMedicaments();

$idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);
 // inclusion du fichier d'affichage des medicament de la vue
 require_once "vue/medicament.php";
}


function modifPassword()
{
// récupération des données du formulaire
 $idEl = htmlspecialchars($_POST["idEl"]);
 $passwordEl = htmlspecialchars($_POST["passwordEl"]);

 
 // mise à jour  : appel de la fonction updMedicament 

 // du modèle
updPassword($passwordEl, $idEl);

// recherche medicaments : appel de la fonction getMedicament du modèle

session_start();
$medicaments = getMedicaments();
$idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);
 // inclusion du fichier d'affichage des medicament de la vue
 require_once "vue/medicament.php";
}

function supprMedicament($idE)
{
// suppression dmedicament : appel de la fonction delMedicament du modèle
delMedicament($idE);
// recherche medicaments : appel de la fonction getMedicament du modèle
$medicaments = getMedicaments();
// inclusion du fichier d'affichage des medicaments de la vue

require_once "vue/medicament.php";
}

function deconnexion()
{
// démarrage d'une nouvelle session ou reprise d'une session existante :
// doit être la première instruction de la page
session_start();
// suppression des variables de session
$_SESSION = array();
// destruction de la session
session_destroy();
// retour à la page de connexion
require_once "vue/accueil.html";
}

function Inscription()
{
// récupération des données (champs) du formulaire

 $usernameEl = htmlspecialchars($_POST["usernameEl"]);
 $passwordEl = htmlspecialchars($_POST["passwordEl"]);
 $nomEl = htmlspecialchars($_POST["nomEl"]);
 $prenomEl = htmlspecialchars($_POST["prenomEl"]);
 

 // ajout dmedicament : appel de la fonction insEleve du modèle
 insInscriptions($usernameEl, $passwordEl, $nomEl, $prenomEl);



 // inclusion du fichier d'affichage medicaments de la vue
 require_once "vue/validationInscr.php";


}


function aiguillageParticipation()
{

// récupération du code eleve
$idE = htmlspecialchars($_POST["codeProfileAction"]);

// appel de la fonction contrôleur de suppression
supprParticipation($idE);
}

function supprParticipation($idE)
{
// suppression de l'participation : appel de la fonction delPart du modèle
delParticipation($idE);
session_start();
// recherche des participation : appel de la fonction getPart du modèle
$medicaments = getMedicaments();
// inclusion du fichier d'affichage des medicaments de la vue
$idE = htmlspecialchars($_SESSION['idComp']);

   $utilisateur = getProfile($idE);
require_once "vue/medicament.php";
}

?>