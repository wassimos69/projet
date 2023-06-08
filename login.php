<?php
include('connection.php');
$email=$_POST['email'];
$pass=$_POST['password'];


$idcom=connexion();
$requete="select type from users where username='$email' and password='$pass'"; 




$result=$idcom->query($requete);
print_r($result);

$result->num_rows;


echo 'test';






















?>