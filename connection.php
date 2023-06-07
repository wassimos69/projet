<?php
function connexion (){
include_once("myparam.inc.php");
//Connexionauserveur
$idcom=@mysql_connect(MYHOST,MYUSER,MYPASS);
//Choixdelabase
$idbase=@mysql_select_db($idcom, 'web');
//Affichaged�unmessageencasd�erreurs
if(!$idcom|!$idbase)
{
echo"<script type=text/javascript>";
echo "alert('Connexion Impossible � la base $base')</script>";
}
//Fermeture de laconnexion
return $idcom;}
?>