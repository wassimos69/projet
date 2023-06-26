<?php 
include('C:\wamp64\www\stagephp\monprojet\connection.php');
  $idcom=connexion();  
  $titre=$_POST['title'];
  $contt=$_POST['cont'];
 
  print_r($_POST);
  
    

   


  $param1 = $_POST['param1'];
  $requete="update page  set  nom=$titre, cont=$contt where idpage=$param1";
  print_r($requete);
  
  $result=$idcom->query($requete);
  print_r($_POST);

// Renvoyer une réponse
$response = "Traitement effectué avec succès";
echo $response;

  
  
  ?>

