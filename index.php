<?php
// inclusion du modèle
require_once "model/model.php";
// inclusion des contrôleurs
require_once "controleur/controleur.php";
require_once "controleur/ActiviteControleur.php";
// lancement du bon contrôleur
if ( empty($_GET["action"]) )
// cas de la consultation : écran de départ
chargementFormHome();
else
if ( $_GET["action"] == 'C')
chargementFormConnexion();
else
if ( $_GET["action"] == 'IS')
chargementAjoutUtilisateur();
else
if ( $_GET["action"] == 'FA')
// cas du formulaire d'ajout
chargementFormAjoutActivite();
else
if ( $_GET["action"] == 'A')
// cas de l'ajout
ajoutActivite();
else
if ( $_GET["action"] == 'AA')
// cas de l'ajout
chargementActivite();
else
if ( $_GET["action"] == 'MS')
// cas de l'aiguillage entre mise à jour et suppression

aiguillageMedicament();
else
if ( $_GET["action"] == 'ME')
// cas de l'aiguillage entre mise à jour et suppression

chargementMedicament();
else
if ( $_GET["action"] == 'FM')
// cas du formulaire d'ajout
chargementFormAjoutMedicament();
else
if ( $_GET["action"] == 'AM')
ajoutMedicament();
else
if ( $_GET["action"] == 'MEC')
consultMedicaments();
//else
//if ( $_GET["action"] == 'MM')
// cas de la mise à jour
//modifMedicament();
else
if ( $_GET["action"] == 'S')
// cas de la suppression
supprMedicament();
else
if ( !isset($_GET["action"]) )
chargementFormConnexion();
else
if ($_GET["action"] == 'RU')
rechercheUtilisateur();
else
if ($_GET["action"] == 'RA')
rechercheUtilisateurActivite();
else
if ($_GET["action"] == 'D')
deconnexion();
//Activite
else
if ( $_GET["action"] == 'MSA')
// cas de l'aiguillage entre mise à jour et suppression

aiguillageActivite();
else
if ( $_GET["action"] == 'M')
// cas de la mise à jour
modifActivite();
else
if ( $_GET["action"] == 'P')
// cas de la mise à jour
participerActivite();
else
if ( $_GET["action"] == 'SA')
// cas de la suppression
supprActivite();

else
if ( $_GET["action"] == 'I')
// cas de la suppression
Inscription();

else
if ( $_GET["action"] == 'PR')
// cas de la suppression
chargementProfile();
else
if ( $_GET["action"] == 'PRM')
// cas de la suppression
chargementModifProfile();
else
if ( $_GET["action"] == 'PRMM')
modifProfile();
else
if ( $_GET["action"] == 'PRMC')
// cas de la suppression
chargementModifPassword();
else
if ( $_GET["action"] == 'PRMMP')
modifPassword();
else
if ( $_GET["action"] == 'CT')
// cas de la suppression
chargementContact();
?>