<?php   



















?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <h1>Dashboard CMS</h1>
  </header>
  
  <nav>
    <ul>
      <li><a href="dashboard.html">Dashboard</a></li>
      <li><a href="articles.html">Articles</a></li>
      <li><a href="pages.html">Pages</a></li>
      <li><a href="media.html">Media</a></li>
      <li><a href="settings.html">Settings</a></li>
    </ul>
  </nav>
  
  <main>
    <h2>Pages</h2>
  
    <button><a href="ajout.html"> crée une page </a></button>
    <?php   
       
     include('C:\wamp64\www\stagephp\monprojet\connection.php');
 
    
    
        $idcom=connexion();
        $requete="SELECT idpage,nom FROM page";
        $result=$idcom->query($requete);
        
        
        if ($result!=null){
          
            echo"<form name=f method='GET' action=action.php?page='page1'>";
            echo"<table border='0'><tbody>";
                echo"<tr><th>Id </th><th>titre</th> <th>action</th> ";
                
             while($row = $result -> fetch_array(MYSQLI_ASSOC))
                    {echo"<tr>";
                        foreach($row as $valeur){
                             echo"<td>$valeur</td>";
                              } echo"<td>
                              
                              <button type='submit' id=".$row['idpage']." onclick='recup(this.id,this)' ><a href='edit.html'>edit</a></button>    <button type='submit' id=".$row['idpage']." onclick='verif(this.id,this)'>sup</button></td>"  ;
                echo"</tr>";}
                echo "</tbody></table>";
                 mysqli_free_result($result);
    echo"</form>";
    
        }
    
    
    
    
    
    
      
 
     ?> 
    
 
 
   </main>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <script language="JavaScript" type="text/javascript" src="edit.js"></script>
   <footer>
     <p>&copy; 2023 CMS Admin. All rights reserved.</p>
   </footer>
 </body>
 </html>
 


