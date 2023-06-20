<?php
// Récupérer les données envoyées
$param1 = $_POST['param1'];


echo'$param1';
include('C:\wamp64\www\stagephp\monprojet\connection.php');
  $idcom=connexion();
  $requete="delete from page where idpage=$param1";
  $result=$idcom->query($requete);
  

// Renvoyer une réponse
$response = "Traitement effectué avec succès $param1";
echo $response;
?>
