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
    
    <?php   
       
     include('C:\wamp64\www\stagephp\monprojet\connection.php');
 
    
    
        $idcom=connexion();
        $requete="SELECT * FROM pages";
        $result=$idcom->query($requete);
        var_dump($result);
        
        if ($result!=null){
            echo"<form name=f onsubmit=edit.php>";
            echo"<table border='0'><tbody>";
                echo"<tr><th>Id </th><th>titre</th> <th>action</th> ";
                $row = $result -> fetch_array(MYSQLI_ASSOC);
                var_dump($row);
             while($row = $result -> fetch_array(MYSQLI_ASSOC))
                    {echo"<tr>";
                        foreach($row as $valeur){
                             echo"<td>$valeur</td>";
                             echo"<button type='submit'>edit</button> <button type='submit'>sup</button>"  ;  }
                echo"</tr>";}
                echo "</tbody></table>";
                 mysqli_free_result($result);
    echo"</form>";
    
        }
    
    
    
    
    
    
      
 
     ?> 
    
 
 
   </main>
   
   <footer>
     <p>&copy; 2023 CMS Admin. All rights reserved.</p>
   </footer>
 </body>
 </html>
 


