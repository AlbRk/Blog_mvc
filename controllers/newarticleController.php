<?php 

	require('configSQL.php');

	$content=$_POST['content'];
	$title=$_POST['title'];
	$requete= "INSERT INTO article (date_art,title,content_art) VALUES (CURDATE(),'$title','$content')";
	$result= @mysql_query($requete);
	if(!$result){
		echo mysql_error();
 	}
	else 
	{
		$_SESSION['controller']="home";
		header('Location: index.php');
		}
?>