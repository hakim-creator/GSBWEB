<!DOCTYPE html>
<html lang="fr">
	 <head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
	 <title>
	 Saisie des informations d'un nouvel activité
	 </title>
	 </head>
 <body>



                  <!--debut-->
      <div class="container">

        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                  <div class="row justify-content-md-center">
                    <div class="col col-lg-4">


                        <h5> Mon profile :</h5>
                        <form method="post" action="index.php?action=PRM">
       
        
  
                          <div class="row mb-3">
                            <label for="description" class="">Nom d'utilisateur :</label>
                            <div class="col-sm-12">
                              <p><?php echo $_SESSION['usernameComp']; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="description" class="">Nom :</label>
                            <div class="col-sm-12">
                              <p><?php echo $_SESSION['nomComp']; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="description" class="">Prénom :</label>
                            <div class="col-sm-12">
                              <p><?php echo $_SESSION['prenomComp']; ?></p>
                            </div>
                          </div>

 
  

       
  
                            <p>
                          <input type="submit"
                          value="Modifier" class="btn btn-outline-dark"/>
                          </p>
                        </form>

                             <div class="row mb-3">
                                <label for="description" class="">Mot de passe : <a href="index.php?action=PRMC"><svg style="width: 20px; height: 20px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg></a></label>
                                <div class="col-sm-12">
                                  <p>********</p>
                                </div>
                              </div>

                    <br></br>
                    <p>
                     <a href="index.php?action=MEC" class="nav-link active">
                     Retour</a>
                     </p>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
</div>
    
<!--fin-->
                
	


<!--Historique-->
<!--Historique
  <div class="container">

        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                  <div class="row justify-content-md-center">
                    <div class="col col-lg-4">


                        <h5>Historiques de participation:</h5>
                        <form method="post" action="index.php?action=PRM">
       
                    
                      <?php foreach ($historiques as $historique): ?>

                   
                          
                          <div class="row mb-3">
                            <label for="description" class="">Nom  :</label>
                            <div class="col-sm-12">
                              <p><?php echo $historique["nom"]; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="description" class="">Prenom :</label>
                            <div class="col-sm-12">
                              <p><?php echo $historique["prenom"]; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="description" class="">Nom de l'activité :</label>
                            <div class="col-sm-12">
                              <p><?php echo $historique["activite"]; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="description" class="">Activiter :</label>
                            <div class="col-sm-12">
                              <p><?php echo $historique['activite']; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="description" class="">Adresse :</label>
                            <div class="col-sm-12">
                              <p><?php echo $historique['Lieu']; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="description" class="">Date :</label>
                            <div class="col-sm-12">
                              <p><?php echo $historique['dateTime']; ?></p>
                            </div>
                          </div>
                        

                      <?php endforeach; ?>
  

       
  
                            
                        </form>

                            

                    
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
</div>-->
    
<!--fin-->

		 

		 <script type="text/javascript" src="js/bootstrap.js"></script>

 </body>
</html>