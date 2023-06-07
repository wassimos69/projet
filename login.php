<?php
include('connection.php');
$email=$_POST['email'];
$pass=$_POST['password'];


$idcom=connexion();
$requete='select * from users where username= $email and password=$pass'; 
$result=@mysql_query($idcom,$requete);




















?>