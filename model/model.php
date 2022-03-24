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
 function updMedicament($idEl, $nomEl, $descriptionEl)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête de mise à jour dans la table employes
 $requete = $bd->prepare("UPDATE medicament
 SET nom = :nomM, Description = :descriptionM
 WHERE id = :idEleve");

 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['nomM' => $nomEl,
 'descriptionM' => $descriptionEl,
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

?>
