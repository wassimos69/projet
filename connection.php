<?php
function connexion(){
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password,'web');

// Check connection
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}


return $conn;
}




?>