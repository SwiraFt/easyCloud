<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="HandheldFriendly" content="true" />
		<link rel="stylesheet" href="../bootstrap/css/bootsrap.css" />

		<title>Inscription</title>
	</head>

	<body>
		<div class="container">
			
			// Fichier du menu
			<?php include("menu.php"); ?>
			
			//Corps
			<div class="jumbotron">
				<h1>Bienvenue sur easyCloud
					<?php echo htmlspecialchars($_POST['Nom Utilisateur']);?> !
				</h1>
				<p>Ce cloud a été conçu pour partager des fichiers,
					tu peux acceder à ton repertoire,
					<a href="repertoire.php">clique ici</a>
				</p>
			</div> <!-- /jumbotron -->
		</div> <!-- /container -->
			
			// Fichier de pied de page
			<?php include("piedDePage.php"); ?>
	</body>
</html>