<?php 
include("configSQL.php"); 

$pseudo=$_POST['pseudo'];
$pass=$_POST['pass'];

$requete="SELECT * FROM user WHERE pseudo='$pseudo' and password='$pass'";
$result= @mysql_query($requete);
if($enreg = mysql_fetch_array($result)){
	$_SESSION['pseudo']=$pseudo;
	$_SESSION['controller']="home";
 header("Location: index.php?controller=home");
}?>
