<?php 



include('C:\wamp64\www\stagephp\monprojet\connection.php');
  $idcom=connexion();  
  $titre=$_POST['title'];
  $contt=$_POST['cont'];
 




  $requete="INSERT INTO page ( nom, cont) VALUES ('$titre', '$contt')";

 
  $result = mysqli_query($idcom, $requete);
  if ($result) {
      echo "La requête a été exécutée avec succès.";
      header('Location: '.'pageedit.php');
  } else {
    
      echo "Erreur lors de l'exécution de la requête : " . mysqli_error($idcom);
  }
  
  // Fermer la connexion à la base de données
  mysqli_close($idcom);














?>