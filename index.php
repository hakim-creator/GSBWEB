<?php
// inclusion du modèle
require_once "model/model.php";
// inclusion des contrôleurs
require_once "controleur/controleur.php";
// lancement du bon contrôleur
if ( empty($_GET["action"]) )
// cas de la consultation : écran de départ
chargementFormConnexion();
else
if ( $_GET["action"] == 'FA')
// cas du formulaire d'ajout
chargementFormAjoutEleve();
else
if ( $_GET["action"] == 'A')
// cas de l'ajout
ajoutEleve();
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
if ( $_GET["action"] == 'M')
// cas de la mise à jour
modifMedicament();
else
if ( $_GET["action"] == 'S')
// cas de la suppression
supprMedicament();
if ( !isset($_GET["action"]) )
chargementFormConnexion();
else
if ($_GET["action"] == 'RU')
rechercheUtilisateur();
else
if ($_GET["action"] == 'D')
deconnexion();



?>