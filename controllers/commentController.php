<?php 

	require('configSQL.php');

	$content=$_POST['content'];
	$id=$_GET['id'];
	$pseudo=$_SESSION['pseudo'];
	$requete= "INSERT INTO comment (id_comment,date_comment,user_comment,content_comment) VALUES ('$id',CURDATE(),'$pseudo','$content')";
	echo $requete;
	$result= @mysql_query($requete);
	$_SESSION['test']=$requete;
	if(!$result){
		echo mysql_error();
 	}
	else 
	{
		$_SESSION['controller']="home";
		header('Location: index.php');
		}
?>