<?php require('configSQL.php');?>
<html lang="fr-FR">
<head>
	<title>Accueil</title>
	<meta charset="utf-8" />
	<meta name="author" content="CHAMBREY Julien et ALBERCA Romain" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Lien vers le style du site -->
	<link rel="stylesheet" type="text/css" href="./design/style.css" />
	<!-- Lien vers le favicon du site -->
	<link rel="shortcut icon" type="image/x-icon" href="design/images/favicon.png" />

</head>
<body>

	<div id="user_bar">

		<div class="configuration">
			<ul>
				<li>
					<a href="#/admin/">
						<img src="design/images/configuration.png" alt="Paramètres du site, direction vers le Panel Admin" />
					</a>
						<ul>
							<?php if($_SESSION['pseudo']=="admin") { ?>
							<li><a href="index.php?controller=newarticle">Nouvel Article</a></li>
							<?php } ?>
							<li><a href="index.php?controller=deconnexion">Déconnexion</a></li>
						</ul>
				</li>
			</ul>
		</div>
		<!-- Fin de la Config -->
		<!-- Si l'utilisateur est connecté -->
		<div class="user_informations">
			<img src="design/images/avatar.png" alt="Avatar de $user" title="Avatar de $user" class="avatar" />
			<div class="user_stats">
				<ul>
					<li>
						<div class="pseudo"> <?php echo $_SESSION['pseudo']; ?> </div>
						<br />
						<br />
					</li>
					<li>
						Articles :
						<br />
						<?php
						// $requete="SELECT count(*) from article ";
						// $result= @mysql_query($requete);
						// $enreg = mysql_fetch_array($result);
						// echo $enreg[0];
						//
						// // model
						// function count_articles($requete)
						// {
						// 	$result= @mysql_query($requete);
						// 	$enreg = mysql_fetch_array($result);
						// 	return $enreg[0];
						// }
						//
						// // controleur = plusieurs actions
						// // if $action = 'count_article'{}
						//
						//
						// $count_article_query = "SELECT count(*) from article ";
						// $result = count_article($count_article_query);
						//
						//
						// // view
						// echo $result;
						//

						?>
					</li>
					<li>
						J'aimes :
						<br />
						<?php
						$requete="SELECT count(*) from liked where user_like =";
						$requete=$requete."'".$_SESSION['pseudo']."'";
						$result= @mysql_query($requete);
						$enreg = mysql_fetch_array($result);
						echo $enreg[0];
						?>
					</li>
				</ul>
			</div>
		</div>
		<div class="user_description">
			<p>
				Salut !
				<br />
				Nous avons eu un projet a faire !
				<br />
				Celui-ci consistait à créer un site web comprenant des
				commandes PHP. J'éspère que nous aurons une bonne note
				compte tenu du temps passé dessus !
				<br />
				<br />
				Ce site a été réalisé par les soins de Julien Chambrey et
				Romain Alberca. Nous l'avons débuté le mardi 21 octobre 2014
				aux alentours de 18h35.
				<br />
				<br />
				Bonne visite !
			</p>
		</div>
		<!-- Fin de la session -->
	</div>
	<div id="wrapper">
		<div class="content">
			<?php
				$id=$_GET['id'];
				$requete= " SELECT * from article where id_art=".$id;
				$result= @mysql_query($requete);
				echo $row;
				while($enreg = mysql_fetch_array($result)){
					$art="<div class=\"article\"><h1>".$enreg[2]."</h1>"."\n<p>".$enreg[3]."</p>"."<hr />Article posté le ".$enreg[0]."<span class= \"interactive\"><a href=\"index.php?controller=like&id=".$enreg[1]."\">J'aime</a></span></div><div class=\"divider\"></div>";
					echo $art;
				}
				?>
		</div>
			<div class="divider"></div>
			<div class="post_a_comment">
				<?php echo "<form method=\"POST\" action=\"index.php?controller=comment&id=".$id."\">";?>
					<table>
						<tr>
							<td>Commentaire :
								<br />
								<textarea name="content" required>Poster votre commentaire...</textarea>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Commenter" />
							</td>
						</tr>
					</table>
				</form>
			</div>
			<?php
				$requete="SELECT * from comment where id_comment=".$_GET['id'];
				$result= @mysql_query($requete);
				while($enreg = mysql_fetch_array($result)){
					$comm="<div class=\"comment\">Par : ".$enreg[1]."<br /><p>".$enreg[3]."</p></div>";
				echo $comm;
				}
				?>
		</div>
	</div>
</body>
</html>
