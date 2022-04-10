<?php
function consultMedicaments()
{
// recherche des medicaments : appel de la fonction getMedicaments du modèle
 $medicaments = getMedicaments();


 // inclusion du fichier d'affichage des medicaments de la vue
 require_once "vue/medicament.php";
}


function chargementFormConnexion()
{
require_once "vue/connexion.php";
}
function chargementActivite()
{
   $activites=getActivites();
// inclusion du formulaire d'ajout d'un activite
require_once "vue/activite.php";
}
function chargementMedicament()
{
// inclusion du formulaire d'ajout d'un employé
require_once "vue/medicament.php";
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
   $_SESSION['nomComp']= $utilisateur["nomComplet"];
   $_SESSION['prenomComp']= $utilisateur["prenomComplet"];
   $_SESSION['typeUtil']= $utilisateur["type"];
// recherche des eleves : appel de la fonction getEleves du modèle
$medicaments = getMedicaments();
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
// recherche de l'employé correspondant à ce code
// via la fonction getEleve du modèle
$eleve = getMedicament($idE);
// inclusion du formulaire de modification (vue)
require_once "vue/formModifMedicament.php";
}
else
// appel de la fonction contrôleur de suppression
supprMedicament($idE);
}

function modifMedicament()
{
// récupération des données du formulaire
 $idEl = htmlspecialchars($_POST["idEl"]);
 $nomEl = htmlspecialchars($_POST["nomEl"]);
 $descriptionEl = htmlspecialchars($_POST["descriptionEl"]);
 $Effet_SecondEl = htmlspecialchars($_POST["Effet_SecondEl"]);
 $Effet_TherapEl = htmlspecialchars($_POST["Effet_TherapEl"]);
 
 // mise à jour de l'employé : appel de la fonction updEmploye 

 // du modèle
updMedicament($idEl, $nomEl, $descriptionEl,$Effet_SecondEl,$Effet_TherapEl );

// recherche des employés : appel de la fonction getEmployes du modèle
 $medicaments = getMEdicaments();

 // inclusion du fichier d'affichage des medicament de la vue
 require_once "vue/medicament.php";
}

function supprMedicament($idE)
{
// suppression de l'employé : appel de la fonction delEmploye du modèle
delMedicament($idE);
// recherche des employés : appel de la fonction getEmployes du modèle
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
require_once "vue/connexion.php";
}



?>