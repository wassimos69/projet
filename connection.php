<?php
function connexion ($base){
include_once("myparam.inc.php");
//Connexionauserveur
$idcom=@mysqli_connect(MYHOST,MYUSER,MYPASS);
//Choixdelabase
$idbase=@mysqli_select_db($idcom, $base);
//Affichaged�unmessageencasd�erreurs
if(!$idcom|!$idbase)
{
echo"<script type=text/javascript>";
echo "alert('Connexion Impossible � la base $base')</script>";
}
//Fermeture de laconnexion
return $idcom;}
?>