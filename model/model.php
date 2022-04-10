<?php
 // fonction de connexion au serveur de base de données et à la base de données
 function connexionBd()
 {

 // remplissage de variables qui serviront de paramètres de connexion
 $utilisateur = "root";
 $mot_de_passe = "";
 $serveur_et_base = "mysql:host=localhost;dbname=gsb";
 // connexion à la base de données
 try
 {
 // création d'un objet de la classe (composant logiciel) PDO : instanciation
$bd = new PDO($serveur_et_base, $utilisateur,
 $mot_de_passe);
}
catch(Exception $e)
 {
 // affichage d'un message d'erreur et arrêt du script
 die("Erreur : ".$e->getMessage());
 }

 // retour de la référence à la base de données
 return $bd;

 }

 // fonction renvoyant le tableau des medicaments
 function getMedicaments()
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // constitution de la requête de sélection dans la table medicament
 $requete = "SELECT * FROM medicament";

 // exécution de la requête et renvoi du résultat
 $bd->query("SET NAMES utf8");
 $resultat = $bd->query($requete);
 // initialisation du tableau à vide
 $medocs = array();
 // boucle de balayage du résultat de la requête

 // et constitution du tableau PHP $medocs
 while ( $ligne = $resultat->fetch() )
 {
 $medocs[] = $ligne;
 }
 // fermeture du curseur relatif au résultat
 $resultat->closeCursor();
 return $medocs;

 }


// fonction renvoyant l'employé correspondant à un certain code
 function getMedicament($idE)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête de sélection dans la table eleves
 $requete = $bd->prepare("SELECT * FROM medicament
 WHERE id = :idEleve");
 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['idEleve' => $idE]);

 // récupération de la ligne du résultat
 $medoc = $requete->fetch();

 return $medoc;

 }

 




 // fonction mettant à jour un employé
 function updMedicament($idEl, $nomEl, $descriptionEl, $Effet_SecondEl, $Effet_TherapEl)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête de mise à jour dans la table activite
 $requete = $bd->prepare("UPDATE medicament
 SET nom = :nomM, Description = :descriptionM, Effet_Second = :Effet_SecondM, Effet_Therap = :Effet_TherapM
 WHERE id = :idEleve");

 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['nomM' => $nomEl,
 'descriptionM' => $descriptionEl,
 'Effet_SecondM' => $Effet_SecondEl,
 'Effet_TherapM' => $Effet_TherapEl,
 'idEleve' => $idEl]);

 }


 // fonction supprimant un employé
 function delMEdicament($idE)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête de suppression dans la table employes
 $requete = $bd->prepare("DELETE FROM medicament
 WHERE id = :idEl");
 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['idEl' => $idE]);
 

 }

 
 function fillUtilisateurs()
{
// appel de la fonction de connexion à la base de données
// renvoyant une référence à la base de données
$bd = connexionBd();
// requête d'insertion APRES CHIFFRAGE DU MOT DE PASSE
$mdpChiffre = hash("sha256", "Picsou1");
$requete = "INSERT INTO utilisateurs
VALUES
('ptronc', '$mdpChiffre', 'TRONC', 'Paul', 'U')";
// exécution de la requête
$bd->query("SET NAMES utf8");
$bd->query($requete);
// requête d'insertion APRES CHIFFRAGE DU MOT DE PASSE
$mdpChiffre = hash("sha256", "Donald2");
$requete = "INSERT INTO utilisateurs
VALUES
('jnastic', '$mdpChiffre', 'NASTIC', 'Jim', 'A')";
// exécution de la requête
$bd->query("SET NAMES utf8");
$bd->query($requete);
// requête d'insertion APRES CHIFFRAGE DU MOT DE PASSE
$mdpChiffre = hash("sha256", "Mickey3");
$requete = "INSERT INTO utilisateurs
VALUES
('phibulaire', '$mdpChiffre', 'HIBULAIRE', 'Pat', 'U')";
// exécution de la requête
$bd->query("SET NAMES utf8");
$bd->query($requete);
}



 


 




function getUtilisateur($nomU, $motDePasseU)
{
$mdpChiffre = hash("sha256", $motDePasseU);
// appel de la fonction de connexion à la base de données
// renvoyant une référence à la base de données
$bd = connexionBd();
// préparation de la requête de sélection dans la table utilisateurs
$requete = $bd->prepare("SELECT * FROM utilisateurs
WHERE nomUtilisateur = :nomUt
AND motDePasse = :motDePasseUt");
// exécution de la requête et renvoi du résultat
$bd->query("SET NAMES utf8");
$requete->execute(['nomUt' => $nomU,
'motDePasseUt' => $mdpChiffre]);
// récupération de la ligne du résultat
$util = $requete->fetch();
return $util;
}




//Activiter


// fonction ajoutant un employé
 function insActivites($nomEl, $dateEl, $lieuEl)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête d'insertion dans la table activite
 $requete = $bd->prepare("INSERT INTO activite(nom, Date_Activite, Lieu)
VALUES
(:nomEle, :dateEle, :LieuEle)");


 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['nomEle' => $nomEl,
 'dateEle' => $dateEl,
 'LieuEle' => $lieuEl]);

 }

  function insInscriptions($usernameEl, $passwordEl, $nomEl, $prenomEl)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

$mdpChiffre = hash("sha256", $passwordEl);
 // préparation de la requête d'insertion dans la table activite
 $requete = $bd->prepare("INSERT INTO utilisateurs(nomUtilisateur, motDePasse, nomComplet, prenomComplet)
VALUES
(:nomUtilisateurEle, :motDePasseEle, :nomCompletEle, :prenomCompletEle)");


 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['nomUtilisateurEle' => $usernameEl,
 'motDePasseEle' => $mdpChiffre,
 'nomCompletEle' => $nomEl,
 'prenomCompletEle' => $prenomEl]);

 }


// fonction participer 
 function insParticipes($nomEl,$prenomEl,$activiteEl, $dateEl, $lieuEl)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête d'insertion dans la table activite
 $requete = $bd->prepare("INSERT INTO participer(nom, prenom, activite, date_activite, Lieu)
VALUES
(:nomEle, :prenomEle, :activiteEle, :dateEle, :LieuEle)");


 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['nomEle' => $nomEl,
 'prenomEle' => $prenomEl,
 'activiteEle' => $activiteEl,
 'dateEle' => $dateEl,
 'LieuEle' => $lieuEl]);

 }

// fonction renvoyant le tableau des activites
 function getActivites()
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // constitution de la requête de sélection dans la table activite
 $requete = "SELECT * FROM activite";

 // exécution de la requête et renvoi du résultat
 $bd->query("SET NAMES utf8");
 $resultat = $bd->query($requete);
 // initialisation du tableau à vide
 $activ = array();
 // boucle de balayage du résultat de la requête

 // et constitution du tableau PHP $activ
 while ( $ligne = $resultat->fetch() )
 {
 $activ[] = $ligne;
 }
 // fermeture du curseur relatif au résultat
 $resultat->closeCursor();
 return $activ;

 }


// fonction renvoyant l'employé correspondant à un certain code
 function getActivite($idE)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête de sélection dans la table eleves
 $requete = $bd->prepare("SELECT * FROM activite
 WHERE id = :idEleve");
 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['idEleve' => $idE]);

 // récupération de la ligne du résultat
 $activit = $requete->fetch();

 return $activit;

 }

 




 // fonction mettant à jour un activite
 function updActivite($idEl, $nomEl, $dateEl,$lieuEl)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête de mise à jour dans la table activite
 $requete = $bd->prepare("UPDATE activite
 SET nom = :nomM, Date_Activite = :dateM, Lieu = :lieuM
 WHERE id = :idEleve");

 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['nomM' => $nomEl,
 'dateM' => $dateEl,
 'lieuM' => $lieuEl,
 'idEleve' => $idEl]);

 }


 // fonction supprimant un employé
 function delActivite($idE)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête de suppression dans la table employes
 $requete = $bd->prepare("DELETE FROM activite
 WHERE id = :idEl");
 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['idEl' => $idE]);
 

 }


?>
