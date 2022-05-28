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

 


  


 




 function getProfile($idE)
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

 // préparation de la requête de sélection dans la table eleves
 $requete = $bd->prepare("SELECT * FROM utilisateurs
 WHERE id = :idEleve");
 // exécution de la requête
 $bd->query("SET NAMES utf8");
 $requete->execute(['idEleve' => $idE]);

 // récupération de la ligne du résultat
 $utilis = $requete->fetch();

 return $utilis;

 }









 function getHistoriques()
 {

 // appel de la fonction de connexion à la base de données
 // renvoyant une référence à la base de données
 $bd = connexionBd();

$historique = $_SESSION['idComp'];
 // constitution de la requête de sélection dans la table medicament
 $requete = "SELECT * FROM participer 
 WHERE id_util = $historique";

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



//Service Web


function init()
{
ini_set('max_execution_time', 0);
$url = 'https://localhost:44393/WebServiceGSB.asmx?WSDL';


$options = array(
   'cache_wsdl'=> 0,
   'trace'=>1,
   'stream_context' => stream_context_create(array(
      'ssl'=> array(
         'verify_peer'=> false,
         'verify_peer_name'=> false,
         'allow_self_signed'=> true
)
)));

$client = new SoapClient($url, $options);
return $client;
}

function getMedicaments()
{
   $client=init();
$res = $client->getMedicaments();
$lesRes= $res->getMedicamentsResult->string;
$tab=array();
for($i=0;$i<count($lesRes);$i++)
   $tab[$i]=explode(";",$lesRes[$i]);

return $tab;

}
 
function getMedicament($idE)
{
   $client=init();

$id=array('idMed'=>$idE);

$res = $client->getMedicament($id);
$lesRes= $res->getMedicamentResult;

$tab=array();
for($i=0;$i<2;$i++)
   $tab[$i]=explode(";",$lesRes[$i]);

return $tab;
}








function getActivites()
{
   $client=init();
$res = $client->getActivites();
$lesRes= $res->getActivitesResult->string;
$tab=array();
for($i=0;$i<count($lesRes);$i++)
   $tab[$i]=explode(";",$lesRes[$i]);

return $tab;
}

function getActivite($idE)
{
   $client=init();
   $parameters=array('idE'=>$idE);
$res = $client->getActivite($parameters);
$lesRes= $res->getActiviteResult;
$tabl=array();

   $tabl=explode(";",$lesRes);


return $tabl;
}

function insActivites($nomEl, $dateEl, $lieuEl)
{
   $client=init();


$parameters=array('nomEle'=>$nomEl, 'dateEle'=>$dateEl, 'lieuEle'=>$lieuEl );


$client->insActivites($parameters);

}

function insInscriptions($usernameEl, $passwordEl, $nomEl, $prenomEl)
{
   $client=init();
   $mdpChiffre = hash("sha256", $passwordEl);

$parameters=array('username'=>$usernameEl, 'password'=> $mdpChiffre, 'nom'=> $nomEl, 'prenom'=> $prenomEl);


$client->insInscriptions($parameters);
   
}


function insParticipes($nomPartEl, $prenomPartEl, $activitePartEl, $datePartEl, $lieuPartEl, $idPartEl, $idActEl)
{
   $client=init();


$parameters=array('nomPart'=>$nomPartEl, 'prenomPart'=>$prenomPartEl, 'activitePart'=>$activitePartEl, 'datePart'=>$datePartEl, 'lieuPart'=>$lieuPartEl, 'idPart'=>$idPartEl, 'idAct'=>$idActEl );


$client->insParticipes($parameters);

}



function delActivite($idE)
{
   $client=init();
   $parameters=array('idE'=> $idE);
   $client->delActivite($parameters);

}

function getUtilisateur($nomU, $motDePasseU)
{
   $client=init();
   $mdpChiffre = hash("sha256", $motDePasseU);
   $parameters=array('nomU'=> $nomU, 'motDePasseU'=> $mdpChiffre);
   $res = $client->getUtilisateur($parameters);
$lesRes= $res->getUtilisateurResult;
$tabl=array();

   $tabl=explode(";",$lesRes);


return $tabl;

}



function delParticipation($idE)
{
   $client=init();
   $parameters=array('idE'=> $idE);
   $client->delParticipation($parameters);
}

//mise a jour profil
function updProfile($nomEl, $prenomEl, $idEl)
{
   $client=init();


$parameters=array('nom'=>$nomEl, 'prenom'=>$prenomEl, 'idE'=>$idEl );


$client->updProfile($parameters);
}



function updPassword($passwordEl, $idEl)
{
   $client=init();

$mdpChiffre = hash("sha256", $passwordEl);
$parameters=array('password'=>$mdpChiffre, 'idEl'=>$idEl );


$client->updPassword($parameters);
}


 function insMedicaments($nomElM, $desElM, $secondElM, $therapElM, $positiveElM, $negativeElM)
 {
   $client=init();


$parameters=array('nomElM'=>$nomElM, 'desElM'=>$desElM, 'secondElM'=>$secondElM, 'therapElM'=>$therapElM, 'positiveElM'=>$positiveElM, 'negativeElM'=>$negativeElM);


$client->insMedicaments($parameters);
 }

//function getHistoriques($idE)
//{
   

  // $client=init();
   //$parameters=array('idE'=>$idE);
//$res = $client->getHistoriques($parameters);
//$lesRes= $res->getHistoriquesResult;
//$tab=array();
//for($i=0;$i<count($lesRes);$i++)
  // $tab=explode(";",$lesRes);

//return $tab;

//}

?>
