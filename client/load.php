<?php include('C:\wamp64\www\stagephp\monprojet\connection.php');
       
      $page=$_GET['page'];
        $idcom=connexion();  
        $requete="SELECT cont FROM page where nom='$page' ";
        $result=$idcom->query($requete);
        while($row = $result -> fetch_array(MYSQLI_ASSOC))
        {
            foreach($row as $valeur){
                echo $valeur;
                  }} ?>




        
      