<?php
// Récupérer les données envoyées








include('C:\wamp64\www\stagephp\monprojet\connection.php');
  $idcom=connexion();

  
  
  if (isset($_POST['param1'])) {
    print_r($_POST);
  $param1 = $_POST['param1'];
  
  $requete="delete from page where idpage=$param1";
  print_r($requete);
  
  $result=$idcom->query($requete);
  

// Renvoyer une réponse
$response = "Traitement effectué avec succès";
echo $response;


  }

 
?>
