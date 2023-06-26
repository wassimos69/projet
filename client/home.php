<!DOCTYPE html>
<html>
<head>
  <title>Online Shop</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <script src="home.js"></script>
  <header>
    <div class="logo">wassim's shop</div>
  <form name="navbar">
    
   
    <nav>
      <ul >
      <?php
     include('C:\wamp64\www\stagephp\monprojet\connection.php');
     $idcom=connexion();  
     $requete="SELECT nom FROM page";
     $result=$idcom->query($requete);
     while($row = $result -> fetch_array(MYSQLI_ASSOC))
                 {
                     foreach($row as $valeur){
                          echo"<form method='GET' action='load.php?page=".$valeur."'><li><a  href='load.php?page=$valeur'>$valeur</a></li> </form>";
                           }} ?>
        
        <li><a href="/stagephp/monprojet/">deconnecte</a></li>
        
      </ul>
    </form>
       <div class="box">
        <select name="categorie" id="cat"  onchange="myFunction()">
          <option value="">categorie</option>
          <option value="sport" name="sport">sport</option>
          <option value="class" name="class">class</option>
          
        </select>
    </nav>
   
    </div>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Bienvenue dans notre boutique </h1>
      
      <a href="#" class="btn-shop">Voir les produits</a>
    </div>
  </section>

  <section class="products">
    <h2>Nos Collection</h2>

    <div class="product">
      <img src="pexels-aman-jakhar-2048548.jpg" alt="Product 1" style="width:100px;
      height:100px;">
      <h3>Air force</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <span class="price">$19.99</span>
      <a href="#" class="btn">Ajouter au panier</a>
    </div>

    <div class="product">
      <img src="air_jorden.jpg" alt="Product 2"  style="width:100px;
      height:100px;">
      <h3>Air jorden 4</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <span class="price">$29.99</span>
      <a href="#" class="btn">Ajouter au panier</a>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Wassim's Shop. Tous droits reserves pour yousfi company .</p>
  </footer>
</body>
</html>
