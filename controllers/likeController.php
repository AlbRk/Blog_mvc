<?php

	require('configSQL.php');
	$id=$_GET['id'];
	$pseudo=$_SESSION['pseudo'];
	$requete= "INSERT INTO liked (art_like,user_like) VALUES ('$id','$pseudo')";
	echo $requete;
	$result= @mysql_query($requete);
	$_SESSION['test']=$requete;
	if(!$result){
		echo mysql_error();
 	}
	
?>
