<?php
include('connection.php');
$email=$_POST['email'];
$pass=$_POST['password'];


$idcom=connexion();
$requete='select * from users where username= $email and password=$pass'; 
$result=@mysqli_query($idcom,$requete);




















?>