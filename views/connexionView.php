<html lang="fr-FR">
<head>
	<title>Inscription</title>
	<meta charset="utf-8" />
	<meta name="author" content="ALBERCA Romain et CHAMBREY Julien" />
	<meta name="description" content="Site web réalisé par ALBERCA Romain et CHAMBREY Julien" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Lien vers le style du site -->
	<link rel="stylesheet" type="text/css" href="design/login.css" />
	<!-- Lien vers le favicon du site -->
	<link rel="shortcut icon" type="image/x-icon" href="design/images/favicon.png" />

</head>
<body>
	<div id="wrapper">
		<div class="login_content">
			<div class="content_title">
				Connexion
			</div>
			<form method="POST" action="index.php?controller=connexion">
				<table>
					<tr>
						<td colspan="2">
							<input type="text" placeholder="Pseudonyme" name="pseudo" class="login-field" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="password" placeholder="Password" name="pass" class="password-field" required />
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Connexion" />
						</td>
					</tr>
				</table>
			</form>
			<br />
			<a href='index.php?controller=inscription'>Inscription</a>
		</div>
		<div id="footer">
			©AwH • 2013 - 2014
		</div>
	</div>
</body>
</html>
