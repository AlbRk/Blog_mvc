<?php 
	session_start();		

		include_once ('config.php'); // fonction bdd
	
	if(isset($_SESSION['pseudo']))
		{
			$controller="home";
			if (isset($_GET['controller'])) 
			{
				$controller = $_GET['controller']; // on clique sur index.php?CONTROLLER=connexion du coup $_GET['CONTROLLER] = connexion.
			}
		}
		else // valeur par défaut, si on n'a pas de paramètre dans l'url
		{
			$controller = "connexion";
		}
		if (isset($controller)) {

			include('views/'.$controller.'View.php');
			require('controllers/'.$controller.'Controller.php');
			
		}
?>