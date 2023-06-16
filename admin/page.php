<?php  
include('C:\wamp64\www\stagephp\monprojet\connection.php');
class page{

 function creatpage($contenu,$titre){

    $idcom=connexion();
    $requete="insert into pages (titre,cont) valeus($titre,$contenu)";
    $result=$idcom->query($requete);




}









}




















?>