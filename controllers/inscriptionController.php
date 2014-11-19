<?php
require('configSQL.php');

$pseudo=$_POST['pseudo'];
$pass=$_POST['pass'];
$confpass=$_POST['confpass'];
$mail=$_POST['mail'];
$confmail=$_POST['confmail'];

if($pass == $confpass AND $mail == $confmail)
{
	$requete= "INSERT INTO user (pseudo,password,mail,inscription) VALUES 		('$pseudo','$pass','$mail',CURDATE())";
	$result= @mysql_query($requete);
	if(!$result){
		echo "erreur";
	}
	else
	{
		header('index.php?controller=home');
	}

}

?>
