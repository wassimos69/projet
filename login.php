<?php
include('connection.php');

$email=$_POST['email'];
$pass=$_POST['password'];


$idcom=connexion();
$requete="select type from users where username='$email' and password='$pass'"; 




$result=$idcom->query($requete);


if ($result!=null){
$row = $result -> fetch_array(MYSQLI_ASSOC);

if($row!=null && $row['type']=="cl"){
header('Location: '.'./client/home.html');}
if($row!=null && $row['type']=="ad"){
    $admin_name=$email;
    header('Location: '.'./admin/admin.html');
    
}
else{
$message='email or passwors invalid';
}



}














include 'index.html';



?>